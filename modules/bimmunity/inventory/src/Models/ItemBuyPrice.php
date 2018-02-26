<?php

namespace Bimmunity\Inventory\Models;

use Bimmunity\Invoice\Models\Currency;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ItemBuyPrice
 * @package Bimmunity\Inventory\Models
 * @version August 3, 2017, 9:03 am UTC
 */
class ItemBuyPrice extends Model
{
    use SoftDeletes;

    public $table = 'item_buy_price';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'item_id',
        'cost',
        'is_current',
        'created_by',
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
        return $this->belongsTo(\Bimmunity\Inventory\Models\Item::class);
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
        return $this->hasMany(\Bimmunity\Invoice\Models\InvoiceProduct::class);
    }
}
