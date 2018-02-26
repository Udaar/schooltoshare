<?php
Route::group(['namespace'=>'Bimmunity\Notification\Http\Controllers','middleware' =>['guest','web','auth']], function () {
	Route::get('/notifications/test/',function ()
	{
		Notification::addNotification("New Ticket issued","/pm/requests/",['3']);
	});
	Route::resource('notifications','NotificationsController');
	Route::get('/notifications/view/','NotificationsController@show');
	Route::get('/notification/getRecent/','NotificationsController@getRecent');

	Route::get('/notification/markAsRead/{id}','NotificationsController@markAsRead');

});
