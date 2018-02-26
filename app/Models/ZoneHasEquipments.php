<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ZoneHasEquipments
 * @package App\Models
 * @version October 18, 2016, 1:44 pm UTC
 */
class ZoneHasEquipments extends Model
{
    use SoftDeletes;

    public $table = 'zones_has_equipments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'equipment_id',
        'zone_id',
        'note',
        'installation_date_time'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'zone_id' => 'integer',
        'equipment_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'zone_id' => 'required|exists:zones',
        // 'equipment_id' => 'required|exists:equipments',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function equipment()
    {
        return $this->belongsTo(\App\Models\Equipment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function zone()
    {
        return $this->belongsTo(\Bimmunity\Bimmodels\Models\Zone::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function requests()
    {
        return $this->belongsToMany('\Bimmunity\Ticketing\Models\Request','maintenance_requests','zones_has_equipment_id','request_id');

         return $this->hasManyThrough(
            '\Bimmunity\Ticketing\Models\Request','App\Models\MaintenanceRequest',
            'zones_has_equipment_id','sid','request_id'
        );
        return $this->hasMany('\Bimmunity\Ticketing\Models\Request', 'zone_has_equipment_id');
    }

}
