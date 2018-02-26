<?php

namespace Bimmunity\Admindbchange\Http\Controllers;

use Bimmunity\Admindbchange\Http\Requests\CreateSysColumnsRequest;
use Bimmunity\Admindbchange\Http\Requests\UpdateSysColumnsRequest;
use Bimmunity\Admindbchange\Models\SysColumns;
use Bimmunity\Admindbchange\Models\SysTables;
use Bimmunity\Admindbchange\Repositories\SysColumnsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Illuminate\Support\Facades\DB;

class SysColumnsController extends AppBaseController
{
    /** @var  SysColumnsRepository */
    private $sysColumnsRepository;

    public function __construct(SysColumnsRepository $sysColumnsRepo)
    {
        $this->sysColumnsRepository = $sysColumnsRepo;
    }

    /**
     * Display a listing of the SysColumns.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->sysColumnsRepository->pushCriteria(new RequestCriteria($request));
        $sysColumns = $this->sysColumnsRepository->all();

        return view('admindbchange::sys_columns.index')
            ->with('sysColumns', $sysColumns);
    }

    /**
     * Show the form for creating a new SysColumns.
     *
     * @return Response
     */
    public function create()
    {
        $tables = SysTables::all();
        $columns = [];
        $columns1 = [];
        $columns2 = [];
        $attributesElements = [];
        $fillableElements = [];
        $castsElements = [];
        $appendsElements = [];
        $columns_elements = [];
        foreach ($tables as $table) {
            $modal = new $table->table_model_name();
            $attributesElements[$table->id] = $modal->getAttributes();
            $fillableElements[$table->id] = $modal->getFillable();
            $castsElements[$table->id] = $modal->getCasts();
            $appendsElements[$table->id] = (array)$modal->append(array())['appends'];
            //$columns2[$table->id] = Schema::getColumnListing($table->table_original_name);
            $columns1[$table->id] = SysColumns::where('table_id', $table->id)->get();
            $columns[$table->id] = DB::select('show columns from ' . $table->table_original_name);
            $counter = count($columns[$table->id]);
            foreach ($appendsElements[$table->id] as $index=>$element){
                $columns[$table->id][$counter] = new \stdClass();
//                $columns_elements[$table->id]['Type'] = $element->Type;
//                $columns_elements[$table->id]['Field'] = $element->Field;
                $columns[$table->id][$counter]->Type  = 'text';
                $columns[$table->id][$counter]->Field = $element;
                $columns[$table->id][$counter]->element_status = 1;
                $counter++;
            }
        }
//        echo "<pre>";
//        print_r('<br />');
////        print_r($attributesElements);
////        print_r('<br />');
////        print_r($fillableElements);
////        print_r('<br />');
////        print_r($castsElements);
////        print_r('<br />');
////        print_r($columns_elements);
////        print_r('<br />');
////        print_r($appendsElements);
////        print_r('<br />');
//        print_r($columns);
//        print_r('<br />');
////        print_r($columns2);
////        print_r('<br />');
////        print_r($columns1);
////        print_r('<br />');
//        die('Hisham');
        return view('admindbchange::sys_columns.create')
            ->with('tables', $tables)
            ->with('columns1', $columns1)
            ->with('columns', $columns);
    }

    /**
     * Store a newly created SysColumns in storage.
     *
     * @param CreateSysColumnsRequest $request
     *
     * @return Response
     */
    public function store(CreateSysColumnsRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'table_id' => 'required|unique_with:admin_columns,column_original_name',
            'column_original_name' => 'required',
            'column_admin_name' => 'required',
            'column_type' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('sysColumns.create'))->with('errors',$validator->messages());
        } else {
            $input = $request->all();
            $input['created_by'] = auth()->id();

            $sysColumns = $this->sysColumnsRepository->create($input);

            Flash::success('Sys Columns saved successfully.');

            return redirect(route('sysColumns.index'));
        }
    }

    /**
     * Display the specified SysColumns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sysColumns = $this->sysColumnsRepository->findWithoutFail($id);

        if (empty($sysColumns)) {
            Flash::error('Sys Columns not found');

            return redirect(route('sysColumns.index'));
        }

        return view('admindbchange::sys_columns.show')->with('sysColumns', $sysColumns);
    }

    /**
     * Show the form for editing the specified SysColumns.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sysColumns = $this->sysColumnsRepository->findWithoutFail($id);

        $tables = SysTables::all();
        $columns = [];
        $columns1 = [];
        foreach ($tables as $table) {
            //$columns[$table->id] = Schema::getColumnListing($table->table_original_name);
            $columns1[$table->id] = SysColumns::where('table_id', $table->id);
            $columns[$table->id] = DB::select('show columns from ' . $table->table_original_name);
        }
        if (empty($sysColumns)) {
            Flash::error('Sys Columns not found');

            return redirect(route('sysColumns.index'));
        }

        return view('admindbchange::sys_columns.edit')
            ->with('tables', $tables)
            ->with('columns1', $columns1)
            ->with('columns', $columns)
            ->with('sysColumns', $sysColumns);
    }

    /**
     * Update the specified SysColumns in storage.
     *
     * @param  int              $id
     * @param UpdateSysColumnsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSysColumnsRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'table_id' => 'required',
            'column_original_name' => 'required',
            'column_type' => 'required',
            'column_admin_name' => 'required'
        ]);
        if ($validator->fails()) {
            return redirect(route('sysColumns.edit',$id))->with('errors',$validator->messages());
        } else {
            $sysColumns = $this->sysColumnsRepository->findWithoutFail($id);

            if (empty($sysColumns)) {
                Flash::error('Sys Columns not found');

                return redirect(route('sysColumns.index'));
            }

            $sysColumns = $this->sysColumnsRepository->update($request->all(), $id);

            Flash::success('Sys Columns updated successfully.');

            return redirect(route('sysColumns.index'));
        }
    }

    /**
     * Remove the specified SysColumns from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sysColumns = $this->sysColumnsRepository->findWithoutFail($id);

        if (empty($sysColumns)) {
            Flash::error('Sys Columns not found');

            return redirect(route('sysColumns.index'));
        }

        $this->sysColumnsRepository->delete($id);

        Flash::success('Sys Columns deleted successfully.');

        return redirect(route('sysColumns.index'));
    }
}
