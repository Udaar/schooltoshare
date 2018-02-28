<?php

namespace Bimmunity\Bimmodels\Http\Controllers;

use Bimmunity\Bimmodels\Http\Requests\CreateFacilityRequest;
use Bimmunity\Bimmodels\Http\Requests\UpdateFacilityRequest;
use Bimmunity\Bimmodels\Repositories\FaciltyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class FacilityController extends AppBaseController
{
    /** @var  FaciltyRepository */
    private $facilityRepository;

    public function __construct(FaciltyRepository $facilityRepo)
    {
        $this->facilityRepository = $facilityRepo;
    }

    /**
     * Display a listing of the Facilty.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        app('App\Http\Controllers\OptionController')->generateToken();
        $building=\Bimmunity\Bimmodels\Models\Building::find(1);
        $BimModel=$building->bim_models()->first();
        if($BimModel){
            $urn=$BimModel->urn;
        }
        $token=\App\Models\Option::where('name','forge_data_read_token')->first();
        if($token){
            $token=$token->value;
        }
        $this->facilityRepository->pushCriteria(new RequestCriteria($request));
        $facilities = $this->facilityRepository->all();
        
        return view('bimmodels::facilities.index',compact('token','urn','building'))
            ->with('facilities', $facilities);
    }

    /**
     * Show the form for creating a new Facilty.
     *
     * @return Response
     */
    public function create()
    {
        $attachedfacilities = \Auth::user()->school->facilities->pluck('id')->toArray();
        $facilities=$this->facilityRepository->all();
        return view('bimmodels::facilities.create',compact('buildings','facilities','attachedfacilities'));
    }

    /**
     * Store a newly created Facilty in storage.
     *
     * @param CreateFacilityRequest $request
     *
     * @return Response
     */
    public function store(CreateFacilityRequest $request)
    {
        $this->validate($request, [
                'facility_id'=>'required'
        ]);
          $input = $request->all();
         \Auth::user()->school->facilities()->detach(\Auth::user()->school->facilities->pluck('id')->toArray());
         \Auth::user()->school->facilities()->attach($input['facility_id']);
        // \DB::table('school_facility')->insert(['school_id'=>$input['building_id'],'facility_id'=>$input['facility_id']]);
        // $facility = $this->facilityRepository->create($input);

        Flash::success('Facilty saved successfully.');

        return redirect(route('facilities.index'));
    }

    /**
     * Display the specified Facilty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $facility = $this->facilityRepository->findWithoutFail($id);

        if (empty($facility)) {
            Flash::error('Facilty not found');

            return redirect(route('facilities.index'));
        }

        return view('bimmodels::facilities.show')->with('facility', $facility);
    }

    /**
     * Show the form for editing the specified Facilty.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $buildings = \Bimmunity\Bimmodels\Models\Building::all();
        $facility = $this->facilityRepository->findWithoutFail($id);

        if (empty($facility)) {
            Flash::error('Facilty not found');

            return redirect(route('facilities.index'));
        }

        return view('bimmodels::facilities.edit',compact('buildings'))->with('facility', $facility);
    }

    /**
     * Update the specified Facilty in storage.
     *
     * @param  int              $id
     * @param UpdateFacilityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFacilityRequest $request)
    {
        $facility = $this->facilityRepository->findWithoutFail($id);

        if (empty($facility)) {
            Flash::error('Facilty not found');

            return redirect(route('facilities.index'));
        }

        $facility = $this->facilityRepository->update($request->all(), $id);

        Flash::success('Facilty updated successfully.');

        return redirect(route('facilities.index'));
    }

    /**
     * Remove the specified Facilty from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $facility = $this->facilityRepository->findWithoutFail($id);

        if (empty($facility)) {
            Flash::error('Facilty not found');

            return redirect(route('facilities.index'));
        }

        $this->facilityRepository->delete($id);

        Flash::success('Facilty deleted successfully.');

        return redirect(route('facilities.index'));
    }
}
