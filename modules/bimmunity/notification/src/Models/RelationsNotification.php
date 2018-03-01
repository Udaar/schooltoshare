<?php

namespace Bimmunity\Notification\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RelationsNotification extends Model
{
    use SoftDeletes;

    public $table = 'relations_notifications';
  
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
  
  
    protected $dates = ['deleted_at'];
  
  
    public $fillable = [
        'name'
    ];
  
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name'=> 'string'
    ];
  
    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
  
    ];
  }