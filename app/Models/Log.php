<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Log extends Model
{
     public $fillable = [
        'description',
        'note',
        'user_id',
        'status'
    ];
}
