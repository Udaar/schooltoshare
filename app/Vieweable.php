<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vieweable extends Model
{
    // public function Vieweable()
    // {
    //     return $this->morphTo();
    // }
    protected $fillable = ['request_id','vieweable_id','vieweable_type','table_name'];
}
