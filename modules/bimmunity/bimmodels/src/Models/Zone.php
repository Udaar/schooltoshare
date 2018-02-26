<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Zone
 * @package App\Models
 * @version October 18, 2016, 1:44 pm UTC
 */
class Zone extends Model
{
    use SoftDeletes;

    public $table = 'zones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'parent_id',
        'building_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'parent_id' => 'integer',
        'building_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function building()
    {
        return $this->belongsTo(\Bimmunity\Bimmodels\Models\Building::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inventories()
    {
        return $this->hasMany(\App\Models\Inventory::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\App\Models\Invoice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function requests()
    {
        return $this->hasMany(\Bimmunity\Ticketing\Models\Request::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockTransactions()
    {
        return $this->hasMany(\App\Models\StockTransaction::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function tenantZoneRelations()
    {
        return $this->hasMany(\App\Models\TenantZoneRelation::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function equipments()
    {
        return $this->belongsToMany(\App\Models\Equipment::class, 'zones_has_equipments')->withPivot('installation_date_time', 'note')->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany 
     */
    public function images()
    {
        return $this->morphToMany('App\Models\File', 'fileable');
    }

    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($zone)
        {
             foreach ($zone->requests as $request) {
                    $request->serviceRequest()->delete();
                    $request->maintenanceRequest()->delete();
                    $request->complaintRequest()->delete();
                    $request->bookingRequest()->delete();
                }
              $zone->requests()->delete();
        });
    }    
}
