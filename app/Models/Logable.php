<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Logable extends Model
{
    protected $fillable=['logable_type','logables_id','log_id'];
}
