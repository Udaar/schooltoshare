<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Store
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:21 pm UTC
 */
class Store extends Model
{
    use SoftDeletes;

    public $table = 'stores';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'number',
        'name',
        'position',
        'responsible_by',
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
        'number' => 'string',
        'name' => 'string',
        'position' => 'string',
        'responsible_by' => 'integer',
        'created_by' => 'integer'
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
    public function user()
    {
        return $this->belongsTo(\App\User::class,'created_by');
    }

    public function responsible()
    {
        return $this->belongsTo(\App\User::class,'responsible_by');
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inventories()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\Inventory::class);
    }
}
