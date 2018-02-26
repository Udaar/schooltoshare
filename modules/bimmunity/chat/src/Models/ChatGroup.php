<?php

namespace Bimmunity\Chat\Models;

use Illuminate\Database\Eloquent\Model;

class ChatGroup extends Model
{
     protected $fillable = ['name','created_by','image_id'];
     protected $hidden=['messages','pivot'];
    public function image(){
       return $this->belongsTo('App\Models\File','image_id');
    }
    protected $appends = array('picture_url','photo','lastMessage');

    public function getPictureUrlAttribute()
    {
        return  url('/').$this->getPhotoAttribute()->first()->path;
    }
     public function getLastMessageAttribute()
    {
        return $this->messages->last();
    } 
   
   public function getPhotoAttribute()
    {
        return $this->image()->get();
    } 
   public function members()
    {
        return $this->belongsToMany('App\User','group_members');
    }

    
    public function messages()
    {
        return $this->morphToMany('Bimmunity\Chat\Models\Message', 'messageable');
    }
    public function memberType($user_id='')
    {
        $group=ChatGroup::find($this->id);
        $type= $group->members()->where('user_id','=',$user_id)->first()->pivot->type;
        return $type;
    }
}
