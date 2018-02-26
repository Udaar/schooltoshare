<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePrivilegeRequest;
use App\Http\Requests\UpdatePrivilegeRequest;
use App\Repositories\PrivilegeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class PrivilegeController extends AppBaseController
{
    /** @var  PrivilegeRepository */
    private $privilegeRepository;

    public function __construct(PrivilegeRepository $privilegeRepo)
    {
        $this->privilegeRepository = $privilegeRepo;
    }

    /**
     * Display a listing of the Privilege.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->privilegeRepository->pushCriteria(new RequestCriteria($request));
        $privileges = $this->privilegeRepository->paginate(10);

        return view('privileges.index')
            ->with('privileges', $privileges);
    }

    /**
     * Show the form for creating a new Privilege.
     *
     * @return Response
     */
    public function create()
    {
        return view('privileges.create');
    }

    /**
     * Store a newly created Privilege in storage.
     *
     * @param CreatePrivilegeRequest $request
     *
     * @return Response
     */
    public function store(CreatePrivilegeRequest $request)
    {
        $input = $request->all();

        $privilege = $this->privilegeRepository->create($input);

        Flash::success('Privilege saved successfully.');

        return redirect(route('dashboard.privileges.index'));
    }

    /**
     * Display the specified Privilege.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $privilege = $this->privilegeRepository->findWithoutFail($id);

        if (empty($privilege)) {
            Flash::error('Privilege not found');

            return redirect(route('dashboard.privileges.index'));
        }

        return view('privileges.show')->with('privilege', $privilege);
    }

    /**
     * Show the form for editing the specified Privilege.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $privilege = $this->privilegeRepository->findWithoutFail($id);

        if (empty($privilege)) {
            Flash::error('Privilege not found');

            return redirect(route('dashboard.privileges.index'));
        }

        return view('privileges.edit')->with('privilege', $privilege);
    }

    /**
     * Update the specified Privilege in storage.
     *
     * @param  int              $id
     * @param UpdatePrivilegeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePrivilegeRequest $request)
    {
        $privilege = $this->privilegeRepository->findWithoutFail($id);

        if (empty($privilege)) {
            Flash::error('Privilege not found');

            return redirect(route('dashboard.privileges.index'));
        }

        $privilege = $this->privilegeRepository->update($request->all(), $id);

        Flash::success('Privilege updated successfully.');

        return redirect(route('dashboard.privileges.index'));
    }

    /**
     * Remove the specified Privilege from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $privilege = $this->privilegeRepository->findWithoutFail($id);

        if (empty($privilege)) {
            Flash::error('Privilege not found');

            return redirect(route('dashboard.privileges.index'));
        }

        $this->privilegeRepository->delete($id);

        Flash::success('Privilege deleted successfully.');

        return redirect(route('dashboard.privileges.index'));
    }
}
