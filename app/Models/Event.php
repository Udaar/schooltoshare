<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Event
 * @package App\Models
 * @version February 22, 2018, 11:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection adminTables
 * @property \Illuminate\Database\Eloquent\Collection buildings
 * @property \Illuminate\Database\Eloquent\Collection files
 * @property \Illuminate\Database\Eloquent\Collection groupMembers
 * @property \Illuminate\Database\Eloquent\Collection inOrders
 * @property \Illuminate\Database\Eloquent\Collection invoiceProducts
 * @property \Illuminate\Database\Eloquent\Collection items
 * @property \Illuminate\Database\Eloquent\Collection notificationUser
 * @property \Illuminate\Database\Eloquent\Collection outOrders
 * @property \Illuminate\Database\Eloquent\Collection rolesHasPrivileges
 * @property \Illuminate\Database\Eloquent\Collection stock
 * @property \Illuminate\Database\Eloquent\Collection stores
 * @property \Illuminate\Database\Eloquent\Collection tenantZoneRelation
 * @property \Illuminate\Database\Eloquent\Collection usersHasPrivileges
 * @property \Illuminate\Database\Eloquent\Collection usersHasRoles
 * @property \Illuminate\Database\Eloquent\Collection zonesHasEquipments
 * @property string name
 * @property integer user_id
 * @property integer school_id
 * @property integer duration
 * @property string d_type
 * @property date date
 * @property integer ticket_id
 */
class Event extends Model
{
    use SoftDeletes;

    public $table = 'events';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'user_id',
        'school_id',
        'duration',
        'd_type',
        'date',
        'ticket_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'user_id' => 'integer',
        'school_id' => 'integer',
        'duration' => 'integer',
        'd_type' => 'string',
        'date' => 'date',
        'ticket_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
