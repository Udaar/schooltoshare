<?php

Route::group([
    'middleware' => ['web', 'auth','guest']
],
    function() {
            Route::get('send/email','Bimmunity\SendEmail\Http\Controllers\SendEmailController@create');
            Route::post('store/email','Bimmunity\SendEmail\Http\Controllers\SendEmailController@store');
    }
);