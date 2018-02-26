<?php
Route::group(['namespace'=>'Bimmunity\Chat\Http\Controllers','middleware' =>['web','auth','guest']], function () {
	Route::get('/getConversations/{user_id}/{type?}','MessagesController@getConversations');

	Route::post('/sendMessage/{receiver_id}/{type?}','MessagesController@sendMessage');

	Route::get('/message/getRecent/','MessagesController@getRecent');

	Route::get('/message/markAsRead/{id}','MessagesController@markAsRead');
	Route::get('/getUnreadMessageCount','MessagesController@getUnreadMessageCount');
	Route::get('/getRecentMessages','MessagesController@getRecentMessages');
	Route::get('/recentGroups',function(){
		return \Auth::user()->recentGroups();
	});		
			
	Route::resource('messages','MessagesController');
	Route::resource('ChatGroup', '\Bimmunity\Chat\Http\Controllers\ChatGroupController');

	// Route::resource('chatGroup','ChatGroupController');
	Route::post('/ChatGroup/delete', '\Bimmunity\Chat\Http\Controllers\ChatGroupController@deleteGroup');
	Route::post('/ChatGroup/leave', '\Bimmunity\Chat\Http\Controllers\ChatGroupController@leaveGroup');
	Route::get('/ChatGroup/edit/{id}', '\Bimmunity\Chat\Http\Controllers\ChatGroupController@loadEditModal');
	Route::post('/ChatGroup/chName/{id}', '\Bimmunity\Chat\Http\Controllers\ChatGroupController@changeGroupName');
	Route::get('/chatGroup/loadGroup','\Bimmunity\Chat\Http\Controllers\ChatGroupController@loadGroups');
	Route::post('/chatGroup/changeImage','\Bimmunity\Chat\Http\Controllers\ChatGroupController@changeImage');
	Route::post('/ChatGroup/deleteMember','\Bimmunity\Chat\Http\Controllers\ChatGroupController@deleteMember');
	Route::post('/ChatGroup/makeAdmin','\Bimmunity\Chat\Http\Controllers\ChatGroupController@makeAdmin');
	Route::post('/ChatGroup/removeAdmin','\Bimmunity\Chat\Http\Controllers\ChatGroupController@removeAdmin');
	Route::get('/ChatGroup/add/{id}', '\Bimmunity\Chat\Http\Controllers\ChatGroupController@loadAddPartial');
	Route::post('/ChatGroup/addPeopleToGroup','\Bimmunity\Chat\Http\Controllers\ChatGroupController@addPeopleToGroup');
	
	
	Route::post('forwardMessage','\Bimmunity\Chat\Http\Controllers\MessagesController@forwardMessage');
});
Route::group(['prefix' =>'api','namespace'=>'\Bimmunity\Chat\Http\Controllers\API','middleware' =>['jwt.auth']],function () {
	Route::get('/chat/yourTeam',['as'=>'jwt.team','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@getTeam']);
	Route::get('/chat/conversation',['as'=>'jwt.Convs','uses'=>'\Bimmunity\Chat\Http\Controllers\API\MessagesController@getConversations']);
	Route::post('/sendMessage',['as'=>'jwt.sendMsg','uses'=>'\Bimmunity\Chat\Http\Controllers\API\MessagesController@sendMessage']);
	Route::post('/forwardMessage','\Bimmunity\Chat\Http\Controllers\API\MessagesController@forwardMessage');
	Route::post('/ChatGroup/delete', ['as'=>'jwt.deleteGroup','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@deleteGroup']);
	Route::post('/ChatGroup/rename', ['as'=>'jwt.deleteGroup','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@renameGroup']);
	Route::post('/ChatGroup/makeAdmin',['as'=>'jwt.makeAdmin','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@makeAdmin']);
	Route::post('/ChatGroup/removeAdmin',['as'=>'jwt.removeAdmin','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@removeAdmin']);
	Route::post('/ChatGroup/addPeopleToGroup',['as'=>'jwt.removeAdmin','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@addPeopleToGroup']);
	Route::post('/ChatGroup/deleteMember',['as'=>'jwt.deleteMember','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@deleteMember']);	
	Route::post('/ChatGroup/changeImage',['as'=>'jwt.ChangeImage','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@changeImage']);
	Route::post('/ChatGroup/createGroup',['as'=>'jwt.CreateGroup','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@createGroup']);
	Route::post('/ChatGroup/leave', ['as'=>'jwt.LeaveGroup','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@leaveGroup']);
	Route::get('/chat/getGroups',['as'=>'jwt.Convs','uses'=>'\Bimmunity\Chat\Http\Controllers\API\ChatGroupController@getGroups']);
	
	
});