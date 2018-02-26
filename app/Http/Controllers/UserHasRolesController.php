<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserHasRolesRequest;
use App\Http\Requests\UpdateUserHasRolesRequest;
use App\Repositories\UserHasRolesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class UserHasRolesController extends AppBaseController
{
    /** @var  UserHasRolesRepository */
    private $userHasRolesRepository;

    public function __construct(UserHasRolesRepository $userHasRolesRepo)
    {
        $this->userHasRolesRepository = $userHasRolesRepo;
    }

    /**
     * Display a listing of the UserHasRoles.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->userHasRolesRepository->pushCriteria(new RequestCriteria($request));
        $userHasRoles = $this->userHasRolesRepository->all();

        return view('user_has_roles.index')
            ->with('userHasRoles', $userHasRoles);
    }

    /**
     * Show the form for creating a new UserHasRoles.
     *
     * @return Response
     */
    public function create()
    {
        return view('user_has_roles.create');
    }

    /**
     * Store a newly created UserHasRoles in storage.
     *
     * @param CreateUserHasRolesRequest $request
     *
     * @return Response
     */
    public function store(CreateUserHasRolesRequest $request)
    {
        $input = $request->all();

        $userHasRoles = $this->userHasRolesRepository->create($input);

        Flash::success('User Has Roles saved successfully.');

        return redirect(route('dashboard.userHasRoles.index'));
    }

    /**
     * Display the specified UserHasRoles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userHasRoles = $this->userHasRolesRepository->findWithoutFail($id);

        if (empty($userHasRoles)) {
            Flash::error('User Has Roles not found');

            return redirect(route('dashboard.userHasRoles.index'));
        }

        return view('user_has_roles.show')->with('userHasRoles', $userHasRoles);
    }

    /**
     * Show the form for editing the specified UserHasRoles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userHasRoles = $this->userHasRolesRepository->findWithoutFail($id);

        if (empty($userHasRoles)) {
            Flash::error('User Has Roles not found');

            return redirect(route('dashboard.userHasRoles.index'));
        }

        return view('user_has_roles.edit')->with('userHasRoles', $userHasRoles);
    }

    /**
     * Update the specified UserHasRoles in storage.
     *
     * @param  int              $id
     * @param UpdateUserHasRolesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserHasRolesRequest $request)
    {
        $userHasRoles = $this->userHasRolesRepository->findWithoutFail($id);

        if (empty($userHasRoles)) {
            Flash::error('User Has Roles not found');

            return redirect(route('dashboard.userHasRoles.index'));
        }

        $userHasRoles = $this->userHasRolesRepository->update($request->all(), $id);

        Flash::success('User Has Roles updated successfully.');

        return redirect(route('dashboard.userHasRoles.index'));
    }

    /**
     * Remove the specified UserHasRoles from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userHasRoles = $this->userHasRolesRepository->findWithoutFail($id);

        if (empty($userHasRoles)) {
            Flash::error('User Has Roles not found');

            return redirect(route('dashboard.userHasRoles.index'));
        }

        $this->userHasRolesRepository->delete($id);

        Flash::success('User Has Roles deleted successfully.');

        return redirect(route('dashboard.userHasRoles.index'));
    }
}
