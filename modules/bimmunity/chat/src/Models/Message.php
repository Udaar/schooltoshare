<?php

namespace Bimmunity\Chat\Models;

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
	   return $this->morphedByMany('App\User', 'messageable');
	}


    public function reads()
    {
        return $this->morphMany('\Bimmunity\Chat\Models\Read', 'readable');
    }

//    returns reads for current user.
    public function myReads()
    {
        return $this->morphMany('\Bimmunity\Chat\Models\Read', 'readable')->where('user_id',\Auth::user()->id);
    }

    public function createdBy($value='')
    {
       return $this->belongsTo('App\User','sender_id');
    }
}
