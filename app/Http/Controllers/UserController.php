<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Models\Role;
use App\Models\Privilege;
use App\Models\File;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userRepository->pushCriteria(new RequestCriteria($request));
        $users=User::where('perent_id',\Auth::user()->id)->get();
        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        $this->validate($request, [
        'email' => 'unique:users'
          ]);
        $input = $request->all();
         if ($request->file('photo')) {
               $file = $request->file('photo');
               $fileid=File::upload($file,'uploads');
             $input['picture']= File::where('id',$fileid[0])->get()->first()->path;
         }
        $input['password'] = bcrypt($input['password']);
        $user = $this->userRepository->create($input);
        
        $user->roles()->sync(\Auth::user()->roles,false);
         $users=User::where('perent_id',\Auth::user()->id)->get();

        Flash::success('User saved successfully.');

        return redirect(route('users.index'))->with('users', $users);
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->findWithoutFail($id);
        $roles=Role::all();
        $privileges=Privilege::all();
        $users=User::where('perent_id',\Auth::user()->id)->get();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'))->with('users', $users);
        }

        return view('users.show',compact('user','roles','privileges'));
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->findWithoutFail($id);
         $users=User::where('perent_id',\Auth::user()->id)->get();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'))->with('users', $users);
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        $this->validate($request, [
        'email' => 'max:255|unique:users,email,'.$id
          ]);
           $input = $request->all();
        $user = $this->userRepository->findWithoutFail($id);
         $users=User::where('perent_id',\Auth::user()->id)->get();
        if(empty($input['password'])){
            unset($input['password']);
        }else{
            $input['password']=bcrypt($input['password']);
        }
        if ($request->file('photo')) {
               $file = $request->file('photo');
             $fileid=File::upload($file,'uploads');
             $input['picture']= File::where('id',$fileid)->get()->first()->path;
         }
         else{
             $input['picture']= $user['picture'];
         }
        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'))->with('users', $users);
        }

        $user = $this->userRepository->update($input, $id);

        Flash::success('User updated successfully.');

        return redirect(route('users.index'))->with('users', $users);
    }

    public function addRole(Request $request)
    {
         $input=$request->all();
         $roles=$input['roles'];
         $userId=$input['userId'];
         User::find($userId)->roles()->sync($roles,false);
         return Redirect::to(URL::previous() . "#user-role-list");
    }

    public function addPrivilege(Request $request)
    {
         $input=$request->all();
         $privileges=$input['privileges'];
         $userId=$input['userId'];
         User::find($userId)->privileges()->sync($privileges,false);
         return Redirect::to(URL::previous() . "#user-privilege-list");
    }

    public function removeRole($userId,$roleId)
    {
        User::find($userId)->roles()->detach($roleId);
         return back();
    }

    public function removePrivilege($userId,$privilegeId)
    {
         User::find($userId)->privileges()->detach($privilegeId);
         return back();
    }
    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $user = $this->userRepository->findWithoutFail($id);
         $users=User::where('perent_id',\Auth::user()->id)->get();

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'))->with('users', $users);
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'))->with('users', $users);
    }

    public function usersByType($type='')
    {
        $users = $this->userRepository->with('roles')->all();
         $users = $users->filter(function ($item) use ($type) {
            return $item->hasRole($type);
        });
        return view('users.index')
            ->with('users', $users)
            ->with('type', $type);;
    }
}
