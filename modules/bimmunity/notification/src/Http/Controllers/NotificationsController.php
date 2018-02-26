<?php

namespace Bimmunity\Notification\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Bimmunity\Notification\Models\Notification;
use Bimmunity\Notification\Models\Read;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $this->readAll();
        $notifications= \Auth::user()->notifications;
       return view('notification::notifications.index',compact('notifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('notification::home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }



    public function getRecent()
    {
        return vieW('notification::notifications.recent');
    }

    public function markAsRead($notification_id) {
        $notification=Notification::find($notification_id);
        if(!count($notification->myReads))
            return Notification::find($notification_id)->reads()->save(new Read(['user_id' => \Auth::user()->id]));
        return Notification::find($notification_id)->myReads;
    }

    public function readAll() {
        $notifications=\Auth::user()->notifications->where('isRead',false);
        foreach($notifications as $notification){
            Notification::find($notification->id)->reads()->save(new Read(['user_id' => \Auth::user()->id]));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
