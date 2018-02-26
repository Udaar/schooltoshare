<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OutOrderItem
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:22 pm UTC
 */
class OutOrderItem extends Model
{
    use SoftDeletes;

    public $table = 'out_order_items';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'order_id',
        'quantity',
        'inventory_id',
        'qc_quality_check',
        'qc_quantity_check',
        'qc_quality_check_date',
        'qc_quantity_check_date',
        'qc_quality_check_by',
        'qc_quantity_check_by',
        'item_cost_id',
        'packing_id',
        'packed_date',
        'packed_by',
        'created_by',
        'cost',
        'element_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_id' => 'integer',
        'quantity' => 'float',
        'cost' => 'float',
        'inventory_id' => 'integer',
        'qc_quality_check_by' => 'integer',
        'qc_quantity_check_by' => 'integer',
        'item_cost_id' => 'integer',
        'packing_id' => 'integer',
        'packed_by' => 'integer',
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
        return $this->belongsTo(\App\User::class,'created_by','created_by');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function inventory()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Inventory::class,'inventory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function inOrder()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\InOrder::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function outOrder()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\OutOrder::class,'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function packing()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Packing::class,'packing_id');
    }

}
