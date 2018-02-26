<?php

Route::group([
    'middleware' => ['web', 'auth','guest']
],
    function() {
        Route::get('/viewerparital',function(){
            return view('bimmodels::viewerparital');
        });
        Route::get('/getviewertables/{id}','Bimmunity\Bimmodels\Http\Controllers\Bim_modelController@getviewertables');
        Route::get('/gettableshow/{id}/{name}','Bimmunity\Bimmodels\Http\Controllers\Bim_modelController@gettableshow');
        Route::get('/getbuildingviewer/{id}','Bimmunity\Bimmodels\Http\Controllers\Bim_modelController@getbuildingviewer');

        Route::get('/getviewer',function(){
            return view('bimmodels::viewer');
        });
        Route::get('/loadurn','Bimmunity\Bimmodels\Http\Controllers\Bim_modelController@loadurn');
        Route::get('/getviewershow/{id}','Bimmunity\Bimmodels\Http\Controllers\Bim_modelController@viewershow');
        Route::get('/loadproject',function(){
            return view('bimmodels::loadproject');
        });
           
        Route::resource('bimModels', 'Bimmunity\Bimmodels\Http\Controllers\Bim_modelController');
        
        Route::resource('bimSystems', 'Bimmunity\Bimmodels\Http\Controllers\Bim_systemController');
        
        Route::resource('bimProjects', 'Bimmunity\Bimmodels\Http\Controllers\Bim_projectController');
        Route::resource('zones', 'Bimmunity\Bimmodels\Http\Controllers\ZoneController');
        Route::resource('buildings', 'Bimmunity\Bimmodels\Http\Controllers\BuildingController');
        Route::resource('spaces', 'Bimmunity\Bimmodels\Http\Controllers\SpaceController');
        Route::resource('bimassets', 'Bimmunity\Bimmodels\Http\Controllers\AssetController');
        Route::resource('facilities', 'Bimmunity\Bimmodels\Http\Controllers\FacilityController');
       
    }
);

