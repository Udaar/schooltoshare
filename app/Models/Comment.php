<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    protected $fillable=['comment','user_id','commentable_id','commentable_type'];
   
      public function user()
    {
       return $this->belongsTo('App\User','user_id','id');
    }

    protected $appends = array('fullname','content','created');

    public function getFullnameAttribute()
    {
        return $this->user->name;  
    }
    public function getContentAttribute()
    {
        return $this->comment;  
    }
    public function getCreatedAttribute()
    {
        return $this->created_at->toDateString();  
    }
    public function commentable()
    {
        return $this->morphTo();
    }

}
