<?php

namespace Bimmunity\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Pusher\Facades\Pusher;
use App\Mail\ContactUsMail;
use Mail;
use Bimmunity\Notification\Models\NotificationType;


class Notification extends Model
{
    protected $fillable =  ['content','url'];

    static function getReceivers($notification_slug,$object){

    }
    static function addNotification($content,$url,$receivers,$email=false,$sms=false)
   	{
            $notification=new Notification;
            $notification->content=$content;
            $notification->url=$url;
            $notification->save();
      
            foreach ($receivers as $receiver) {
                \App\User::find($receiver)->notifications()->attach($notification);
                if($email){
                    Mail::to(\App\User::find($receiver)->email)->send(new ContactUsMail($notification['url'],$notification['content'],"Bimmunity.org"),function($m){
                        $m->from("Bimmunity.org","notification");
                    });
                }
                if($sms){

                }
            }
                 Pusher::trigger($receivers, 'notification', ['message' => $notification]);
            return $notification;
       }
       static function sendNotifications($object, $slug)
       {
           $notification_type=NotificationType::where('slug','=',$slug)->first();
           $roles = $notification_type->roles;
        //    return $roles->first()->users;
            $relations = $notification_type->realtions_notifications;
           $users = collect();
           foreach($roles as $role)
           {
               foreach($role->users as $user)
               {
                   $users->push($user->id);
               }
            }
           foreach($relations as $relation)
           {
                $name = $relation->name;
                    // return $object->$name;
                $user = $object->$name; 
                 $user_id = $user['id'];
                // return $user_returned->id;
                if($user_id)
                    $users->push($user_id);
           }
           $users = $users->unique();
           //return $object;
           return self::addNotification($notification_type->content."  ". $object->name,"/".$notification_type->url."/".$object->id,$users,false,false);
            
       }

    public function reads()
    {
        return $this->morphMany('Bimmunity\Notification\Models\Read', 'readable');
    }
//    returns reads for current user.
    public function myReads()
    {
        return $this->morphMany('Bimmunity\Notification\Models\Read', 'readable')->where('user_id',\Auth::user()->id);
    }

    protected $appends = array('isRead');

    public function getIsReadAttribute()
    {
        return (count($this->myReads))?true:false;
    }
}
