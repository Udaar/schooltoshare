<?php

namespace Bimmunity\Admindbchange\Http\Controllers;

use Bimmunity\Admindbchange\Http\Requests\CreateAdminModulesRequest;
use Bimmunity\Admindbchange\Http\Requests\UpdateAdminModulesRequest;
use Bimmunity\Admindbchange\Repositories\AdminModulesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdminModulesController extends AppBaseController
{
    /** @var  AdminModulesRepository */
    private $adminModulesRepository;

    public function __construct(AdminModulesRepository $adminModulesRepo)
    {
        $this->adminModulesRepository = $adminModulesRepo;
    }

    /**
     * Display a listing of the AdminModules.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->adminModulesRepository->pushCriteria(new RequestCriteria($request));
        $adminModules = $this->adminModulesRepository->all();

        return view('admindbchange::admin_modules.index')
            ->with('adminModules', $adminModules);
    }

    /**
     * Show the form for creating a new AdminModules.
     *
     * @return Response
     */
    public function create()
    {
        return view('admindbchange::admin_modules.create');
    }

    /**
     * Store a newly created AdminModules in storage.
     *
     * @param CreateAdminModulesRequest $request
     *
     * @return Response
     */
    public function store(CreateAdminModulesRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = auth()->id();

        $adminModules = $this->adminModulesRepository->create($input);

        Flash::success('Admin Modules saved successfully.');

        return redirect(route('adminModules.index'));
    }

    /**
     * Display the specified AdminModules.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adminModules = $this->adminModulesRepository->findWithoutFail($id);

        if (empty($adminModules)) {
            Flash::error('Admin Modules not found');

            return redirect(route('adminModules.index'));
        }

        return view('admindbchange::admin_modules.show')->with('adminModules', $adminModules);
    }

    /**
     * Show the form for editing the specified AdminModules.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adminModules = $this->adminModulesRepository->findWithoutFail($id);

        if (empty($adminModules)) {
            Flash::error('Admin Modules not found');

            return redirect(route('adminModules.index'));
        }

        return view('admindbchange::admin_modules.edit')->with('adminModules', $adminModules);
    }

    /**
     * Update the specified AdminModules in storage.
     *
     * @param  int              $id
     * @param UpdateAdminModulesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdminModulesRequest $request)
    {
        $adminModules = $this->adminModulesRepository->findWithoutFail($id);

        if (empty($adminModules)) {
            Flash::error('Admin Modules not found');

            return redirect(route('adminModules.index'));
        }

        $adminModules = $this->adminModulesRepository->update($request->all(), $id);

        Flash::success('Admin Modules updated successfully.');

        return redirect(route('adminModules.index'));
    }

    /**
     * Remove the specified AdminModules from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adminModules = $this->adminModulesRepository->findWithoutFail($id);

        if (empty($adminModules)) {
            Flash::error('Admin Modules not found');

            return redirect(route('adminModules.index'));
        }

        $this->adminModulesRepository->delete($id);

        Flash::success('Admin Modules deleted successfully.');

        return redirect(route('adminModules.index'));
    }
}
