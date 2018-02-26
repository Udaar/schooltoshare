<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable =  ['content', 'sender_id'];

    public function sender()
    {
        return $this->belongsTo('App\User', 'sender_id');
    }

	public function receivers()
	{
	   return $this->morphedByMany('App\User', 'messagable');
	}


    public function reads()
    {
        return $this->morphMany('App\Read', 'readable');
    }

//    returns reads for current user.
    public function myReads()
    {
        return $this->morphMany('App\Read', 'readable')->where('user_id',\Auth::user()->id);
    }

    public function createdBy($value='')
    {
       return $this->belongsTo('App\User','sender_id');
    }
}
