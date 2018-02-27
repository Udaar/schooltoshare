<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Request
 * @package App\Models
 * @version February 26, 2018, 2:30 pm UTC
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
 * @property integer user_id
 * @property integer school_id
 * @property integer activity_id
 * @property date date
 */
class Request extends Model
{
    use SoftDeletes;

    public $table = 'requests';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'school_id',
        'activity_id',
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'school_id' => 'integer',
        'activity_id' => 'integer',
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function school(){
        return $this->belongsTo('\Bimmunity\Bimmodels\Models\Building','school_id');
    }
    public function Facility(){
        return $this->belongsTo('\Bimmunity\Bimmodels\Models\Building','activity_id');
    }
    
}
