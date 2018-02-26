<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Inventory
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:21 pm UTC
 */
class Inventory extends Model
{
    use SoftDeletes;

    public $table = 'inventories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'store_id',
        'item_id',
        'quantity',
        'issued_quantity',
        'remains_quantity',
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
        'store_id' => 'integer',
        'item_id' => 'integer',
        'quantity' => 'float',
        'issued_quantity' => 'float',
        'remains_quantity' => 'float',
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function item()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Item::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function store()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Store::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inOrderItems()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\InOrderItem::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function outOrderItems()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\OutOrderItem::class);
    }
}
