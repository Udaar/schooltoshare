<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Bim_model
 * @package Bimmunity\Bimmodels\Http\Models
 * @version October 25, 2017, 11:55 am UTC
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
 * @property string project_code
 * @property string organization_code
 * @property string sub_project_code
 * @property string document_type_code
 * @property string discipline_code
 * @property string sub_discipline_code
 * @property string level_code
 * @property string urn
 */
class Bim_model extends Model
{
    use SoftDeletes;

    public $table = 'bim_models';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'building_id',
        'project_code',
        'organization_code',
        'sub_project_code',
        'document_type_code',
        'discipline_code',
        'sub_discipline_code',
        'level_code',
        'urn'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'project_code' => 'string',
        'organization_code' => 'string',
        'sub_project_code' => 'string',
        'document_type_code' => 'string',
        'discipline_code' => 'string',
        'sub_discipline_code' => 'string',
        'level_code' => 'string',
        'urn' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    public function project(){
        return $this->belongsTo('Bimmunity\Bimmodels\Models\Bim_project','code','project_code');
    }
    public function system(){
        return $this->belongsTo('Bimmunity\Bimmodels\Models\Bim_system','code','discipline_code');
    }

    public function building(){
        return $this->belongsTo('Bimmunity\Bimmodels\Models\Building');
    }

    
}
