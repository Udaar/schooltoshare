<?php

Route::group([
    'middleware' => ['web'],
    'namespace'  => 'Bimmunity\Guest\Http\Controllers',
],
    function() {

            Route::get('/guest','GuestController@guestindex');
            Route::get('/AllCompanies','GuestController@AllCompanies');
            Route::get('/properties','GuestController@Allbuilding');
            Route::get('/getcities/{id}','GuestController@getcities');
            Route::get('/propertymanagementcompanies','GuestController@propertymanagementcompanies');
            Route::get('/facilitymanagementcompanies','GuestController@facilitymanagementcompanies');
            Route::get('/serviceProvidercompanies','GuestController@serviceProvidercompanies');
            Route::get('/search/{country}/{city}/{name}','GuestController@search');
            Route::get('/see_more/{type}','GuestController@seemore');
            Route::get('/company','GuestController@company');
            Route::get('testguest','GuestController@testguest');
            
});

