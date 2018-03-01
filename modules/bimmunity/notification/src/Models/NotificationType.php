<?php

namespace Bimmunity\Notification\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NotificationType extends Model
{
  use SoftDeletes;

  public $table = 'notification_types';

  const CREATED_AT = 'created_at';
  const UPDATED_AT = 'updated_at';


  protected $dates = ['deleted_at'];


  public $fillable = [
      'name',
      'slug',
      'content',
      'url'
  ];

  /**
   * The attributes that should be casted to native types.
   *
   * @var array
   */
  protected $casts = [
      'id' => 'integer',
      'name'=> 'string',
      'slug'=> 'string',
      'content'=> 'string',
      'url'=> 'string'
  ];

  /**
   * Validation rules
   *
   * @var array
   */
  public static $rules = [

  ];
  public function Notifiables(){
    return $this->hasMany('Bimmunity\Notification\Models\Notifiable');
  }
  public function roles(){      
    return $this->morphedByMany('Bimmunity\Authentication\Models\Role', 'notifiable');
  }
  public function realtions_notifications()
  {
    return $this->morphedByMany('Bimmunity\Notification\Models\RelationsNotification', 'notifiable');
    /*
      // $notifications = $this->Notifiables->where('notifiable_type','Relation');
      // $types = collect();
      // foreach($notifications as $notification)
      // {
      //   $types->push($notification->notifiable_id);
      // }
      // return $types;
    */
  }
}
