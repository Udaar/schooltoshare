<?php

namespace Bimmunity\Admindbchange\Http\Controllers;

use Bimmunity\Admindbchange\Http\Requests\CreateSysTablesRequest;
use Bimmunity\Admindbchange\Http\Requests\UpdateSysTablesRequest;
use Bimmunity\Admindbchange\Models\AdminModules;
use Bimmunity\Admindbchange\Repositories\SysTablesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SysTablesController extends AppBaseController
{
    /** @var  SysTablesRepository */
    private $sysTablesRepository;

    public function __construct(SysTablesRepository $sysTablesRepo)
    {
        $this->sysTablesRepository = $sysTablesRepo;
    }

    /**
     * Display a listing of the SysTables.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sysTablesRepository->pushCriteria(new RequestCriteria($request));
        $sysTables = $this->sysTablesRepository->all();

        return view('admindbchange::sys_tables.index')
            ->with('sysTables', $sysTables);
    }

    /**
     * Show the form for creating a new SysTables.
     *
     * @return Response
     */
    public function create()
    {
        $data = DB::select('SHOW TABLES');
        $tables = [];
        foreach ($data as $table) {
            foreach ($table as $key => $value)
                $tables[$value] = $value;
        }
        $modules = AdminModules::all();
        return view('admindbchange::sys_tables.create')
            ->with('modules', $modules)
            ->with('tables', $tables);
    }

    /**
     * Store a newly created SysTables in storage.
     *
     * @param CreateSysTablesRequest $request
     *
     * @return Response
     */
    public function store(CreateSysTablesRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'table_original_name' => 'unique:admin_tables',
            'module_id' => 'required',
            'table_model_name' => 'required',
            'table_admin_name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('sysTables.create'))->with('errors',$validator->messages());
        } else {
            $input = $request->all();
            $input['created_by'] = auth()->id();

            $sysTables = $this->sysTablesRepository->create($input);

            Flash::success('Sys Tables saved successfully.');

            return redirect(route('sysTables.index'));
        }
    }

    /**
     * Display the specified SysTables.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sysTables = $this->sysTablesRepository->findWithoutFail($id);

        if (empty($sysTables)) {
            Flash::error('Sys Tables not found');

            return redirect(route('sysTables.index'));
        }

        return view('admindbchange::sys_tables.show')->with('sysTables', $sysTables);
    }

    /**
     * Show the form for editing the specified SysTables.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $data = DB::select('SHOW TABLES');
        $tables = [];
        foreach ($data as $table) {
            foreach ($table as $key => $value)
                $tables[$value] = $value;
        }
        $modules = AdminModules::all();
        $sysTables = $this->sysTablesRepository->findWithoutFail($id);

        if (empty($sysTables)) {
            Flash::error('Sys Tables not found');

            return redirect(route('sysTables.index'));
        }

        return view('admindbchange::sys_tables.edit')->with('modules', $modules)->with('tables', $tables)->with('sysTables', $sysTables);
    }

    /**
     * Update the specified SysTables in storage.
     *
     * @param  int              $id
     * @param UpdateSysTablesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSysTablesRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'module_id' => 'required',
            'table_admin_name' => 'required',
            'table_model_name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('sysTables.edit',$id))->with('errors',$validator->messages());
        } else {
            $sysTables = $this->sysTablesRepository->findWithoutFail($id);

            if (empty($sysTables)) {
                Flash::error('Sys Tables not found');

                return redirect(route('sysTables.index'));
            }

            $sysTables = $this->sysTablesRepository->update($request->all(), $id);

            Flash::success('Sys Tables updated successfully.');

            return redirect(route('sysTables.index'));
        }
    }

    /**
     * Remove the specified SysTables from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sysTables = $this->sysTablesRepository->findWithoutFail($id);

        if (empty($sysTables)) {
            Flash::error('Sys Tables not found');

            return redirect(route('sysTables.index'));
        }

        $this->sysTablesRepository->delete($id);

        Flash::success('Sys Tables deleted successfully.');

        return redirect(route('sysTables.index'));
    }
}
