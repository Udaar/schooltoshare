<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleHasPrivilegesRequest;
use App\Http\Requests\UpdateRoleHasPrivilegesRequest;
use App\Repositories\RoleHasPrivilegesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RoleHasPrivilegesController extends AppBaseController
{
    /** @var  RoleHasPrivilegesRepository */
    private $roleHasPrivilegesRepository;

    public function __construct(RoleHasPrivilegesRepository $roleHasPrivilegesRepo)
    {
        $this->roleHasPrivilegesRepository = $roleHasPrivilegesRepo;
    }

    /**
     * Display a listing of the RoleHasPrivileges.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->roleHasPrivilegesRepository->pushCriteria(new RequestCriteria($request));
        $roleHasPrivileges = $this->roleHasPrivilegesRepository->all();

        return view('role_has_privileges.index')
            ->with('roleHasPrivileges', $roleHasPrivileges);
    }

    /**
     * Show the form for creating a new RoleHasPrivileges.
     *
     * @return Response
     */
    public function create()
    {
        return view('role_has_privileges.create');
    }

    /**
     * Store a newly created RoleHasPrivileges in storage.
     *
     * @param CreateRoleHasPrivilegesRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleHasPrivilegesRequest $request)
    {
        $input = $request->all();

        $roleHasPrivileges = $this->roleHasPrivilegesRepository->create($input);

        Flash::success('Role Has Privileges saved successfully.');

        return redirect(route('dashboard.roleHasPrivileges.index'));
    }

    /**
     * Display the specified RoleHasPrivileges.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roleHasPrivileges = $this->roleHasPrivilegesRepository->findWithoutFail($id);

        if (empty($roleHasPrivileges)) {
            Flash::error('Role Has Privileges not found');

            return redirect(route('dashboard.roleHasPrivileges.index'));
        }

        return view('role_has_privileges.show')->with('roleHasPrivileges', $roleHasPrivileges);
    }

    /**
     * Show the form for editing the specified RoleHasPrivileges.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roleHasPrivileges = $this->roleHasPrivilegesRepository->findWithoutFail($id);

        if (empty($roleHasPrivileges)) {
            Flash::error('Role Has Privileges not found');

            return redirect(route('dashboard.roleHasPrivileges.index'));
        }

        return view('role_has_privileges.edit')->with('roleHasPrivileges', $roleHasPrivileges);
    }

    /**
     * Update the specified RoleHasPrivileges in storage.
     *
     * @param  int              $id
     * @param UpdateRoleHasPrivilegesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleHasPrivilegesRequest $request)
    {
        $roleHasPrivileges = $this->roleHasPrivilegesRepository->findWithoutFail($id);

        if (empty($roleHasPrivileges)) {
            Flash::error('Role Has Privileges not found');

            return redirect(route('dashboard.roleHasPrivileges.index'));
        }

        $roleHasPrivileges = $this->roleHasPrivilegesRepository->update($request->all(), $id);

        Flash::success('Role Has Privileges updated successfully.');

        return redirect(route('dashboard.roleHasPrivileges.index'));
    }

    /**
     * Remove the specified RoleHasPrivileges from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roleHasPrivileges = $this->roleHasPrivilegesRepository->findWithoutFail($id);

        if (empty($roleHasPrivileges)) {
            Flash::error('Role Has Privileges not found');

            return redirect(route('dashboard.roleHasPrivileges.index'));
        }

        $this->roleHasPrivilegesRepository->delete($id);

        Flash::success('Role Has Privileges deleted successfully.');

        return redirect(route('dashboard.roleHasPrivileges.index'));
    }
}
