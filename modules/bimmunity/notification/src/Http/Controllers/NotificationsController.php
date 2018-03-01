<?php

namespace Bimmunity\Notification\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Bimmunity\Notification\Models\Notification;
use Bimmunity\Notification\Models\Notifiable;
use Bimmunity\Notification\Models\Read;
use Bimmunity\Notification\Models\NotificationType;
use DB;


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
    public function getPartial($id)
    {
        $notification_type =NotificationType::find($id);
        //return $notification->realtions_notifications;
        $roles = \Bimmunity\Authentication\Models\Role::all();
        $relations = \Bimmunity\Notification\Models\RelationsNotification::all();
        $users = \App\User::all();
        return view('notification::notifications.remodal_partial',compact('notification_type','roles','relations','users'));
    }
    public function updateNotificationType($id, Request $request)
    {
        //  return $id;
        $notification_type =NotificationType::find($id);
        // $notification_related = Notifiable::Where('notification_type_id','=',$notification_type->id)->get();
        // return DB::table('notifiables')->get();
        // foreach($notification_related as $not_rel)
        // {
        //     $not_rel->delete();
        // }
        DB::table('notifiables')->where('notification_type_id', '=', $notification_type->id)->delete();
        $roles = $request['roles'];
        $relations = $request['relations'];
        if($roles)
        {
           foreach($roles as $role)
            {
                DB::table('notifiables')->insert(
                    ['notification_type_id'=>$id,'notifiable_type'=>'Bimmunity\Authentication\Models\Role','notifiable_id'=>$role]
                );
            }
        }
        if($relations)
        {
           foreach($relations as $relation)
            {
                DB::table('notifiables')->insert(
                    ['notification_type_id'=>$notification_type->id,'notifiable_type'=>'Bimmunity\Notification\Models\RelationsNotification','notifiable_id'=>$relation]
                );
            }
        }
        return "true";

    }
    public function manageNotifications()
    {
        $notifications = NotificationType::all();
        // $roles = \Bimmunity\Authentication\Models\Role::all();
        // $relations = \Bimmunity\Notification\Models\RelationsNotification::all();
        // $users = \App\User::all();
        return view('notification::notifications.manage_notifications',compact('notifications'));
    }
    public function get_all_notifications()
    {
        $notifications = \Auth::user()->notifications()->orderBy('created_at','DESC')->paginate(15);
        // $this->readAll();
        return view('notification::notifications.all_notifications',compact('notifications'));
    }
    public function tryIt()
    {
        //return \Bimmunity\Tasks\Models\Task::find(1)->files()->first();
        $vas= NotificationType::find(1)->relations;
        //dd($vas->first());
        //return $vas->get();
        return Notification::sendNotifications(\Bimmunity\Tasks\Models\Task::find(1),'task');
    }
}
