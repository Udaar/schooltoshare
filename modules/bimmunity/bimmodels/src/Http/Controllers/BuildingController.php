<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateBuildingRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateBuildingRequest;
use Bimmunity\Bimmodels\Repositories\BuildingRepository;
use App\Http\Controllers\AppBaseController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Flash;
use Bimmunity\Bimmodels\Models\Building;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Follow;
use App\Models\File;


use Carbon\Carbon;

class BuildingController extends AppBaseController
{
    /** @var  BuildingRepository */
    private $buildingRepository;

    public function __construct(BuildingRepository $buildingRepo)
    {
        $this->buildingRepository = $buildingRepo;
    }

    /**
     * Display a listing of the Building.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->buildingRepository->pushCriteria(new RequestCriteria($request));
        $buildings = $this->buildingRepository->with(['profile'])->all();

        return view('bimmodels::buildings.index')
            ->with('buildings', $buildings);
    }

    /**
     * Show the form for creating a new Building.
     *
     * @return Response
     */
    public function create()
    {
        return view('bimmodels::buildings.create');
    }

    /**
     * Store a newly created Building in storage.
     *
     * @param CreateBuildingRequest $request
     *
     * @return Response
     */
    public function store(CreateBuildingRequest $request)
    {
         $input = $request->all();
        $building = $this->buildingRepository->create($input);
        if ($request->file('logo')) {
            $file = $request->file('logo');
           $fileid=File::upload($file,'uploads');
           $building->files()->attach(File::where('id',$fileid[0])->get()->first(),['is_profile'=>1]);
           
        }
        else{
                // set a place holder
                $building->files()->attach(File::getFileByPath(config('ifm.buildings.image_placeholder')));
            }

        Flash::success('Building saved successfully.');

        return redirect(route('buildings.index'));
    }

    /**
     * Display the specified Building.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        return view('bimmodels::buildings.show')->with('building', $building);
    }

    /**
     * Show the form for editing the specified Building.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);
        $facilities=$building->facilities;
        $buildingProperties=$building->propertis;
        $buildingEvents=$building->events;
        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        return view('bimmodels::buildings.edit',compact('facilities','buildingProperties','buildingEvents'))
                ->with('building', $building);
    }

    /**
     * Update the specified Building in storage.
     *
     * @param  int              $id
     * @param UpdateBuildingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBuildingRequest $request)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        $input = $request->all();
        $building = $this->buildingRepository->update($input, $id);
        if ($request->file('logo')) {
            $file = $request->file('logo');
           $fileid=File::upload($file,'uploads');
           $building->files()->attach(File::where('id',$fileid[0])->get()->first(),['is_profile'=>1]);
           
        }
           

        Flash::success('Building updated successfully.');

        return redirect(route('buildings.index'));
    }

    /**
     * Remove the specified Building from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $building = $this->buildingRepository->findWithoutFail($id);

        if (empty($building)) {
            Flash::error('Building not found');

            return redirect(route('buildings.index'));
        }

        $this->buildingRepository->delete($id);

        Flash::success('Building deleted successfully.');

        return redirect(route('buildings.index'));
    }

    public function changeProfilePicture($buildingId='',Request $request)
    {
        $input=$request->all();
        $path=$input['path'];
        $building = $this->buildingRepository->find($buildingId);
        if($building->profilePicture()){
            $building->files()->detach($building->profilePicture());
        }
        return $building->files()->attach(File::getFileByPath($path),['is_profile'=>1]);
    }
    public function allBuilding(){
        return Building::all();
    }

    public function getSocialRedirect( $provider )
    {

        $providerKey = Config::get('services.' . $provider);

        if (empty($providerKey)) {

            return back()
                ->with('error','No such provider');

        }

        return Socialite::driver( $provider )->redirect();

    }


    public function getSocialHandle( $provider ,$id)
    {

        if (Input::get('denied') != '') {

            return redirect()->to('/login')
                ->with('status', 'danger')
                ->with('message', 'You did not share your profile data with our social app.');

        }

        $user = Socialite::driver( $provider )->user();

        $socialUser = null;

        //Check is this email present
        $userCheck = User::where('email', '=', $user->email)->first();

        $email = $user->email;

        if (!$user->email) {
            $email = 'missing' . str_random(10);
        }

        if (!empty($userCheck)) {

            $socialUser = $userCheck;

        }
        else {

            $sameSocialId = Social::where('social_id', '=', $user->id)
                ->where('provider', '=', $provider )
                ->first();

            if (empty($sameSocialId)) {

                //There is no combination of this social id and provider, so create new one
                $newSocialUser = new User;
                $newSocialUser->email              = $email;
                $newSocialUser->name =  $user->name;
                $newSocialUser->password = bcrypt(str_random(16));
                $newSocialUser->remember_token = str_random(64);
                $newSocialUser->type = 'guest';
                $newSocialUser->save();
                Follow::create(array(
                    'user_id'=>$newSocialUser->id,
                    'followable_id'=>$id,
                    'followable_type'=>get_class(Building::find($id))
                ));
                $socialData = new Social;
                $socialData->social_id = $user->id;
                $socialData->provider= $provider;
                $newSocialUser->social()->save($socialData);
                $socialUser = $newSocialUser;

            }
            else {

                $socialUser = $sameSocialId->user;
                Follow::create(array(
                    'user_id'=>$socialUser->id,
                    'followable_id'=>$id,
                    'followable_type'=>get_class(Building::find($id))
                ));

            }

        }

        auth()->login($socialUser, true);

        
        return redirect()->route('home');

        //return abort(500, 'User has no Role assigned, role is obligatory! You did not seed the database with the roles.');

    }
    public function follow($id){
        Follow::create(array(
            'user_id'=>\Auth::user()->id,
            'followable_id'=>$id,
            'followable_type'=>get_class(Building::find($id))
        ));
        return back();
    }

    public function profile($id){
        $building = $this->buildingRepository->findWithoutFail($id);
        return view('child.school_profile',compact('building'));
    }
}