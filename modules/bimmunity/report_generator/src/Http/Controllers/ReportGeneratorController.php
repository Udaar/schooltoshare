<?php

namespace Bimmunity\ReportGenerator\Http\Controllers;

use App\Http\Controllers\AppBaseController;
use Bimmunity\Admindbchange\Models\AdminModules;
use Bimmunity\Admindbchange\Models\SysColumns;
use Bimmunity\Admindbchange\Models\SysTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class ReportGeneratorController extends AppBaseController
{
    //
    public function GenerateReport()
    {
        $modules = AdminModules::all();
        $columns = [];
        $tables = [];
        foreach ($modules as $module) {
            $tables[$module->id] = SysTables::where('module_id', $module->id)->get();
        }
        foreach ($tables as $table1) {
            foreach ($table1 as $table) {
                $columns[$table->id] = SysColumns::where('table_id', $table->id)->get();
            }
        }
        return view( 'report_generator::report.create')
            ->with('modules', $modules)
            ->with('tables', $tables)
            ->with('columns', $columns)
            ;
    }

    public function ajax_get_table_columns()
    {
        $table_name = $_POST['table_name'];
        $columns = DB::select('show columns from ' . $table_name);
        echo json_encode($columns);
    }

    public function ajax_get_table_values()
    {
//        echo "<pre>";
//        print_r('<br />');
//        print_r($_POST);
//        print_r('<br />');
//        print_r($_FILES);
//        print_r('<br />');
//        die('Hisham');
        DB::enableQueryLog();
        $x_axis = Input::get('x_axis');
        $x_axis1 = $x_axis.'1';
        $y_axis = Input::get('y_axis');
        $y_axis1 = $y_axis.'1';
        $table_name = Input::get('table_name');
        $x_column_type = Input::get('x_column_type');
        $y_column_type = Input::get('y_column_type');
        $x_column = $table_name.'.'.$x_axis;
        $y_column = $table_name.'.'.$y_axis;
        $query = DB::table($table_name);
        $x_axis_status = 0;
        $y_axis_status = 0;
        $filters_status = [];
        $table_char_status = [];
        $query->addSelect($table_name.'.id as element_id');
        if(Input::get('x_axis_status') == 'true'){
            $x_axis_status = 1;
        }else {
            if (stripos($x_column_type, 'int(') !== false) {
                if (Input::get('x_column_fun') == 'sum') {
                    $query->addSelect(DB::raw('sum(' . $x_column . ') as ' . $x_axis1));
                } else if (Input::get('x_column_fun') == 'avg') {
                    $query->addSelect(DB::raw('avg(' . $x_column . ') as ' . $x_axis1));
                } else if (Input::get('x_column_fun') == 'max') {
                    $query->addSelect(DB::raw('max(' . $x_column . ') as ' . $x_axis1));
                } else if (Input::get('x_column_fun') == 'min') {
                    $query->addSelect(DB::raw('min(' . $x_column . ') as ' . $x_axis1));
                } else if (Input::get('x_column_fun') == 'count') {
                    $query->addSelect(DB::raw('count(' . $x_column . ') as ' . $x_axis1));
                } else {
                    $query->addSelect($x_column . ' as ' . $x_axis1);
                }
            } else if ((stripos($x_column_type, 'varchar(') !== false || stripos($x_column_type, 'text') !== false) && Input::get('x_axis_status') == false) {
                if (Input::get('x_column_fun') == 'count') {
                    $query->addSelect(DB::raw('count(' . $x_column . ') as ' . $x_axis1));
                } else {
                    $query->addSelect($x_column . ' as ' . $x_axis1);
                }
            } else if (stripos($x_column_type, 'timestamp') !== false || stripos($x_column_type, 'datetime') !== false) {
                if (Input::get('x_column_fun') == 'year') {
                    $query->addSelect(DB::raw("YEAR(" . $x_column . ") as " . $x_axis1))->groupby($x_axis1);
                } elseif (Input::get('x_column_fun') == 'month') {
                    $query->addSelect(DB::raw("CONCAT_WS('-',MONTH(" . $x_column . "),YEAR(" . $x_column . ")) as " . $x_axis1))->groupby($x_axis1);
                } elseif (Input::get('x_column_fun') == 'day') {
                    $query->addSelect(DB::raw("CONCAT_WS('-',DAY(" . $x_column . "),MONTH(" . $x_column . "),YEAR(" . $x_column . ")) as " . $x_axis1))->groupby($x_axis1);
                } else {
                    $query->addSelect(DB::raw("CONCAT_WS('-',DAY(" . $x_column . "),MONTH(" . $x_column . "),YEAR(" . $x_column . ")) as " . $x_axis1))->groupby($x_axis1);
                }
            }
        }
        if(Input::get('y_axis_status') == 'true'){
            $y_axis_status = 1;
        }else {
            if (stripos($y_column_type, 'int(') !== false) {
                if (Input::get('y_column_fun') == 'sum') {
                    $query->addSelect(DB::raw('sum(' . $y_column . ') as ' . $y_axis1));
                } else if (Input::get('y_column_fun') == 'avg') {
                    $query->addSelect(DB::raw('avg(' . $y_column . ') as ' . $y_axis1));
                } else if (Input::get('y_column_fun') == 'max') {
                    $query->addSelect(DB::raw('max(' . $y_column . ') as ' . $y_axis1));
                } else if (Input::get('y_column_fun') == 'min') {
                    $query->addSelect(DB::raw('min(' . $y_column . ') as ' . $y_axis1));
                } else if (Input::get('y_column_fun') == 'count') {
                    $query->addSelect(DB::raw('count(' . $y_column . ') as ' . $y_axis1));
                } else {
                    $query->addSelect($y_column . ' as ' . $y_axis1);
                }
            } else if ((stripos($y_column_type, 'varchar(') !== false || stripos($y_column_type, 'text') !== false) && Input::get('y_axis_status') == false) {
                if (Input::get('y_column_fun') == 'count') {
                    $query->addSelect(DB::raw('count(' . $y_column . ') as ' . $y_axis1));
                } else {
                    $query->addSelect($y_column . ' as ' . $y_axis1);
                }
            } else if (stripos($y_column_type, 'timestamp') !== false || stripos($y_column_type, 'datetime') !== false) {
                if (Input::get('y_column_fun') == 'year') {
                    $query->addSelect(DB::raw("YEAR(" . $y_column . ") as " . $y_axis1))->groupby($y_axis1);
                } else if (Input::get('y_column_fun') == 'month') {
                    $query->addSelect(DB::raw("CONCAT_WS('-',MONTH(" . $y_column . "),YEAR(" . $y_column . ")) as " . $y_axis1))->groupby($y_axis1);
                } else if (Input::get('y_column_fun') == 'day') {
                    $query->addSelect(DB::raw("CONCAT_WS('-',DAY(" . $y_column . "),MONTH(" . $y_column . "),YEAR(" . $y_column . ")) as " . $y_axis1))->groupby($y_axis1);
                } else {
                    $query->addSelect(DB::raw("CONCAT_WS('-',DAY(" . $y_column . "),MONTH(" . $y_column . "),YEAR(" . $y_column . ")) as " . $y_axis1))->groupby($y_axis1);
                }
            }
        }
        if(isset($_POST['table_fields'])){
            foreach ($_POST['table_fields'] as $table_field_index=>$table_field) {
                if($_POST['table_status'][$table_field_index] == 'false'){
                    $table_field = trim($table_field);
                    $temp_table_field = $table_field . "1";
                    $query->addSelect($table_name . '.' . $table_field . ' as ' . $temp_table_field);
                }else{
                    $table_field = trim($table_field);
                    $temp_table_field = $table_field . "1";
                    $table_char_status[0] = $table_field;
                    $table_char_status[1] = $temp_table_field;
                }
            }
        }
        if(isset($_POST['filter_arr']) && count($_POST['filter_arr']) > 0){
            for ($i=0;$i<count($_POST['filter_arr']);$i=$i+6) {
                $filter_coulmn = $_POST['filter_arr'][$i+2];
                $filter_coulmn_type = $_POST['filter_arr'][$i+1];
                $filter_coulmn_element_status = $_POST['filter_arr'][$i+3];
                $filter_cond = $_POST['filter_arr'][$i+4];
                $filter_spec1 = $_POST['filter_arr'][$i+5];
                if(isset($_POST['filter_arr'][$i+6])) {
                    $filter_spec2 = $_POST['filter_arr'][$i + 6];
                }else{
                    $filter_spec2 = 0;
                }
                if($filter_coulmn_element_status == 'true'){
                    $filters_status[0] = 0;
                    $filters_status[2] = $_POST['filter_arr'][$i+2];
                    $filters_status[1] = $_POST['filter_arr'][$i+1];
                    $filters_status[3] = $_POST['filter_arr'][$i+3];
                    $filters_status[4] = $_POST['filter_arr'][$i+4];
                    $filters_status[5] = $_POST['filter_arr'][$i+5];
                    if(isset($_POST['filter_arr'][$i+6])) {
                        $filters_status[6] = $_POST['filter_arr'][$i + 6];
                    }else{
                        $filters_status[6] = 0;
                    }
                    continue;
                }
                if(stripos($filter_coulmn_type,'timestamp') !== false  || stripos($filter_coulmn_type,'datetime') !== false ){
                    if($filter_cond == 'range'){
                        $query->whereBetween($table_name.'.'.$filter_coulmn, [date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $filter_spec1))), date('Y-m-d H:i:s', strtotime(str_replace('-', '/', $filter_spec2)))]);
                        $i =$i+1;
                    }else if($filter_cond == '<' || $filter_cond == '>' ||$filter_cond == '='){
                        $query->where($table_name.'.'.$filter_coulmn, $filter_cond, date('Y-m-d H:i:s', strtotime(str_replace('-', '/',$filter_spec1))));
                    }
                }else if((stripos($filter_coulmn_type,'varchar(') !== false || stripos($filter_coulmn_type,'text') !== false) && $filter_coulmn_element_status == false){
                    if($filter_cond == 'like'){
                        $query->where($table_name.'.'.$filter_coulmn, $filter_cond, '%'.$filter_spec1.'%');
                    }
                }else if(stripos($filter_coulmn_type,'int(') !== false ){
                    if($filter_cond == 'range'){
                        $query->whereBetween($table_name.'.'.$filter_coulmn, [ $filter_spec1,  $filter_spec2]);
                        $i =$i+1;
                    }
                    if($filter_cond == '<' || $filter_cond == '>' || $filter_cond == '='){
                        $query->where($table_name.'.'.$filter_coulmn, $filter_cond, $filter_spec1);
                    }
                }
            }
        }
        $data = $query->get();

        $result = array();
        $counter = 0;
        $table_modal = Input::get('table_modal');
        $modal = new $table_modal;
        foreach($data as $element){
            if($x_axis_status == 1){
                $modal_element = $modal->find($element->element_id);
                $temp_function = 'get'.ucfirst($x_axis).'Attribute';
                $element->$x_axis1 = $modal_element->$temp_function();
            }
            if($y_axis_status == 1){
                $modal_element = $modal->find($element->element_id);
                $temp_function = 'get'.ucfirst($y_axis).'Attribute';
                $element->$y_axis1 = $modal_element->$temp_function();
            }
            if(isset($filters_status[0])){
                $temp_funn = $filters_status[2].'1';
                if(stripos($element->$temp_funn,$filters_status[5]) === false){
                    continue;
                }
            }
            if(isset($table_char_status[0])){
                $modal_element = $modal->find($element->element_id);
                $temp_funn = $table_char_status[0];
                $temp_funn2 = $table_char_status[1];
                $element->$temp_funn2 = $modal_element->$temp_funn;
            }
            unset($element->element_id);
            $result['x'][$counter] = $element->$x_axis1;
            $result['y'][$counter] = $element->$y_axis1;
            $result['table'][$counter] = $element;
            $counter++;
        }
//        print_r(DB::getQueryLog());
        echo json_encode($result);
    }
}
