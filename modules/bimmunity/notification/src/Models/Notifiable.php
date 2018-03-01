<?php

namespace Bimmunity\Notification\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Notifiable extends Model
{
    use SoftDeletes;


  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';


  protected $dates = ['deleted_at'];


  public $fillable = [
      'notification_type_id',
      'notifiable_type',
      'notifiable_id'
  ];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [
      'id' => 'integer',
      'notification_type_id'=> 'integer',
      'notifiable_type'=> 'string',
      'notifiable_id'=> 'string'
  ];

  /**
   * Validation rules
   *
   * @var array
   */
  public static $rules = [

  ];
}
