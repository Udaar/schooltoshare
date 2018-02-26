<?php

namespace Bimmunity\Admindbchange\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AdminModules
 * @package Bimmunity\Admindbchange\Models
 * @version January 10, 2018, 1:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection actionables
 * @property \Illuminate\Database\Eloquent\Collection adminColumns
 * @property \Illuminate\Database\Eloquent\Collection AdminTable
 * @property \Illuminate\Database\Eloquent\Collection bookingRequests
 * @property \Illuminate\Database\Eloquent\Collection buildings
 * @property \Illuminate\Database\Eloquent\Collection files
 * @property \Illuminate\Database\Eloquent\Collection groupMembers
 * @property \Illuminate\Database\Eloquent\Collection inOrders
 * @property \Illuminate\Database\Eloquent\Collection interviewEvaluations
 * @property \Illuminate\Database\Eloquent\Collection invoiceProducts
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
 * @property string module_name
 * @property string description
 * @property integer created_by
 * @property boolean element_status
 */
class AdminModules extends Model
{
    use SoftDeletes;

    public $table = 'modules_table';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'module_name',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'module_name' => 'string',
        'description' => 'string',
        'created_by' => 'integer',
        'element_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function adminTables()
    {
        return $this->hasMany(\Bimmunity\Admindbchange\Models\AdminTable::class);
    }
}
