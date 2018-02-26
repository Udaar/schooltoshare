<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PathPermission extends Model
{
    //
    public $table="path_permissions";
    protected $fillable = [
     	'user_id','path_id','type','permission',
     ];
     public function user()
     {
         return $this->belongsTo('App\User');
     }
}
