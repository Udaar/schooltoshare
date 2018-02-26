<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GroupMembers;
class ChatGroup extends Model
{
     protected $fillable = ['name','created_by','image_id'];
    public function image(){
      $image = $this->belongsTo('App\Models\File','image_id');
      if($image)
        return $image;
      return '';
   }

   public function members()
    {
        return $this->belongsToMany('App\User','group_members')->withPivot('type');
    }

    
    public function messages()
    {
        return $this->morphToMany('App\Message', 'messageable');
    }

    public function memberType($user_id='')
    {
        $group=ChatGroup::find($this->id);
        $type= $group->members()->where('user_id','=',$user_id)->first()->pivot->type;
        return $type;
    }
        // protected $appends = array('memberType');
        // public function getMemberTypeAttribute()
        // {
        //     $type= $this->members()->where('user_id','=',\Auth::user()->id)->first()->pivot->type;
        //     return $type;
        // }

}
