<?php

namespace Bimmunity\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Pusher\Facades\Pusher;
use App\Mail\ContactUsMail;
use Mail;


class Notification extends Model
{
    protected $fillable =  ['content','url'];

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
