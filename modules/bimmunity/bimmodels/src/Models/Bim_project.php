<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bim_project
 * @package Bimmunity\Bimmodels\Http\Models
 * @version October 25, 2017, 11:57 am UTC
 *
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
 * @property string code
 * @property integer perent_id
 * @property string description
 */
class Bim_project extends Model
{
    use SoftDeletes;

    public $table = 'bim_projects';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'code',
        'perent_id',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'code' => 'string',
        'perent_id' => 'integer',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function bimmodel(){
        return $this->hasMany('Bimmunity\Bimmodels\Models\Bim_model','project_code','code');
    }
    public function project(){
        return $this->belongsTo('Bimmunity\Bimmodels\Models\Bim_project','perent_id','id');
    }
    
}
