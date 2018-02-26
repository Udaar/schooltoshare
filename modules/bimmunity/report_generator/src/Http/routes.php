<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => ['web', 'auth','guest'],
    'namespace'  => 'Bimmunity\ReportGenerator\Http\Controllers'
],
function() {
//    Route::get('/', 'HomeController@index');

//    Auth::routes();

//    Route::get('/home', 'HomeController@index');

//Route::resource('buildings', 'BuildingController');


    Route::resource('fileTables', 'FileTableController');

    Route::get('/create_report', 'ReportGeneratorController@GenerateReport');

    Route::post('ajax_get_table_columns',['as'=>'ajax_get_table_columns','uses'=>'ReportGeneratorController@ajax_get_table_columns']);

    Route::post('ajax_get_table_values',['as'=>'ajax_get_table_values','uses'=>'ReportGeneratorController@ajax_get_table_values']);
}
);
