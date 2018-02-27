<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Level
 * @package App\Models
 * @version November 22, 2017, 12:06 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection actionables
 * @property \Illuminate\Database\Eloquent\Collection bookingRequests
 * @property \Illuminate\Database\Eloquent\Collection buildings
 * @property \Illuminate\Database\Eloquent\Collection files
 * @property \Illuminate\Database\Eloquent\Collection groupMembers
 * @property \Illuminate\Database\Eloquent\Collection inOrders
 * @property \Illuminate\Database\Eloquent\Collection interviewEvaluations
 * @property \Illuminate\Database\Eloquent\Collection invoiceProducts
 * @property \Illuminate\Database\Eloquent\Collection itemBuyPrice
 * @property \Illuminate\Database\Eloquent\Collection itemCosts
 * @property \Illuminate\Database\Eloquent\Collection items
 * @property \Illuminate\Database\Eloquent\Collection leaveEntitlements
 * @property \Illuminate\Database\Eloquent\Collection leaveRequests
 * @property \Illuminate\Database\Eloquent\Collection notificationUser
 * @property \Illuminate\Database\Eloquent\Collection opportunityApprovals
 * @property \Illuminate\Database\Eloquent\Collection organizationTypes
 * @property \Illuminate\Database\Eloquent\Collection outOrders
 * @property \Illuminate\Database\Eloquent\Collection permissionRole
 * @property \Illuminate\Database\Eloquent\Collection permissionUser
 * @property \Illuminate\Database\Eloquent\Collection roleUser
 * @property \Illuminate\Database\Eloquent\Collection rolesHasPrivileges
 * @property \Illuminate\Database\Eloquent\Collection salaries
 * @property \Illuminate\Database\Eloquent\Collection stock
 * @property \Illuminate\Database\Eloquent\Collection stockTransactionTask
 * @property \Illuminate\Database\Eloquent\Collection stores
 * @property \Illuminate\Database\Eloquent\Collection tenantZoneRelation
 * @property \Illuminate\Database\Eloquent\Collection timesheetActions
 * @property \Illuminate\Database\Eloquent\Collection usersHasPrivileges
 * @property \Illuminate\Database\Eloquent\Collection usersHasRoles
 * @property \Illuminate\Database\Eloquent\Collection zonesHasEquipments
 * @property string name
 * @property integer building_id
 */
class Facility extends Model
{
    use SoftDeletes;

    public $table = 'facilities';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'logoavaliable',
        'lognotavaliable'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
