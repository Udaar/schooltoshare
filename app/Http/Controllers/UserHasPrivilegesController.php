<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserHasPrivilegesRequest;
use App\Http\Requests\UpdateUserHasPrivilegesRequest;
use App\Repositories\UserHasPrivilegesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserHasPrivilegesController extends AppBaseController
{
    /** @var  UserHasPrivilegesRepository */
    private $userHasPrivilegesRepository;

    public function __construct(UserHasPrivilegesRepository $userHasPrivilegesRepo)
    {
        $this->userHasPrivilegesRepository = $userHasPrivilegesRepo;
    }

    /**
     * Display a listing of the UserHasPrivileges.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userHasPrivilegesRepository->pushCriteria(new RequestCriteria($request));
        $userHasPrivileges = $this->userHasPrivilegesRepository->all();

        return view('user_has_privileges.index')
            ->with('userHasPrivileges', $userHasPrivileges);
    }

    /**
     * Show the form for creating a new UserHasPrivileges.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_has_privileges.create');
    }

    /**
     * Store a newly created UserHasPrivileges in storage.
     *
     * @param CreateUserHasPrivilegesRequest $request
     *
     * @return Response
     */
    public function store(CreateUserHasPrivilegesRequest $request)
    {
        $input = $request->all();

        $userHasPrivileges = $this->userHasPrivilegesRepository->create($input);

        Flash::success('User Has Privileges saved successfully.');

        return redirect(route('dashboard.userHasPrivileges.index'));
    }

    /**
     * Display the specified UserHasPrivileges.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userHasPrivileges = $this->userHasPrivilegesRepository->findWithoutFail($id);

        if (empty($userHasPrivileges)) {
            Flash::error('User Has Privileges not found');

            return redirect(route('dashboard.userHasPrivileges.index'));
        }

        return view('user_has_privileges.show')->with('userHasPrivileges', $userHasPrivileges);
    }

    /**
     * Show the form for editing the specified UserHasPrivileges.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userHasPrivileges = $this->userHasPrivilegesRepository->findWithoutFail($id);

        if (empty($userHasPrivileges)) {
            Flash::error('User Has Privileges not found');

            return redirect(route('dashboard.userHasPrivileges.index'));
        }

        return view('user_has_privileges.edit')->with('userHasPrivileges', $userHasPrivileges);
    }

    /**
     * Update the specified UserHasPrivileges in storage.
     *
     * @param  int              $id
     * @param UpdateUserHasPrivilegesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserHasPrivilegesRequest $request)
    {
        $userHasPrivileges = $this->userHasPrivilegesRepository->findWithoutFail($id);

        if (empty($userHasPrivileges)) {
            Flash::error('User Has Privileges not found');

            return redirect(route('dashboard.userHasPrivileges.index'));
        }

        $userHasPrivileges = $this->userHasPrivilegesRepository->update($request->all(), $id);

        Flash::success('User Has Privileges updated successfully.');

        return redirect(route('dashboard.userHasPrivileges.index'));
    }

    /**
     * Remove the specified UserHasPrivileges from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userHasPrivileges = $this->userHasPrivilegesRepository->findWithoutFail($id);

        if (empty($userHasPrivileges)) {
            Flash::error('User Has Privileges not found');

            return redirect(route('dashboard.userHasPrivileges.index'));
        }

        $this->userHasPrivilegesRepository->delete($id);

        Flash::success('User Has Privileges deleted successfully.');

        return redirect(route('dashboard.userHasPrivileges.index'));
    }
}
