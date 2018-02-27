<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Route::get('/', function () {
// 	return view('welcome');
// });


Auth::routes();
Route::get('/', 'HomeController@index');
Route::resource('sendemail', 'ContactUSController');

Route::group([
    'middleware' => ['web','auth']
],
    function() {
        Route::get('/home', 'HomeController@dashboard');
        Route::resource('events', 'EventController');
        Route::get('/show/school/{id}','\Bimmunity\Bimmodels\Http\Controllers\BuildingController@profile');
        Route::get('/inf_news_event',function(){
            return view('school.inf_new_event');
        });
        Route::resource('requests', 'RequestController');
        
            
});


