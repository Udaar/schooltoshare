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
	Route::get('/notification/manage','NotificationsController@manageNotifications');	
	Route::get('/getPartial/{id}','NotificationsController@getPartial');	
	Route::post('/saveNotifications/{id}','NotificationsController@updateNotificationType');	
	Route::get('/all_notifications','NotificationsController@get_all_notifications');
	Route::get('/notification/try','NotificationsController@tryIt');
});
