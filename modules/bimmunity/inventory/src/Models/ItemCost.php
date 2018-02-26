<?php

namespace Bimmunity\Inventory\Models;

use Bimmunity\Invoice\Models\Currency;
use Bimmunity\Invoice\Models\Invoice_Product;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ItemCost
 * @package Bimmunity\Inventory\Models
 * @version July 13, 2017, 8:35 am UTC
 */
class ItemCost extends Model
{
    use SoftDeletes;

    public $table = 'item_costs';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'item_id',
        'buy_price',
        'is_current',
        'created_by',
        'cost',
        'discount',
        'apply_tax',
        'currency_id',
        'element_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'item_id' => 'integer',
        'cost' => 'float',
        'is_current' => 'tinyint',
        'apply_tax' => 'integer',
        'currency_id' => 'integer',
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
        return $this->belongsTo(\Bimmunity\Inventory\Models\Item::class,'item_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function outOrderItems()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\OutOrderItem::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class,'currency_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoiceProducts()
    {
        return $this->hasMany(Invoice_Product::class);
    }
}
