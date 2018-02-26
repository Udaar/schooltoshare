<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StockTransaction
 * @package App\Models
 * @version October 18, 2016, 1:42 pm UTC
 */
class StockTransaction extends Model
{
    use SoftDeletes;

    public $table = 'stock_transactions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'transaction_date_time',
        'type',
        'equipment_id',
        'quantity',
        'inventory_id',
        'zone_id',
        'supplier_id',
        'note'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'equipment_id' => 'integer',
        'quantity' => 'integer',
        'inventory_id' => 'integer',
        'zone_id' => 'integer',
        'supplier_id' => 'integer',
        'note' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'string|required',
        'equipment_id' => 'integer|required',
        'quantity' => 'integer|required',
        'inventory_id' => 'integer|required',
        'zone_id' => 'integer',
        'note' => 'string'
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
    public function inventory()
    {
        return $this->belongsTo(\App\Models\Inventory::class);
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
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tasks()
    {
        return $this->belongsToMany('App\Models\Task');
    }


    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($transaction)
        {
            if($transaction->type=='in')
            {
                Stock::where(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->first()->decrement('quantity',$transaction->quantity);
            }

            if($transaction->type=='out')
            {
                Stock::where(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->first()->increment('quantity',$transaction->quantity);
            }

        });

        static::created(function($transaction)
        {
            if($transaction->type=='in')
            {
                Stock::firstOrCreate(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->increment('quantity',$transaction->quantity);
            }

            if($transaction->type=='out')
            {
                Stock::firstOrCreate(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->decrement('quantity',$transaction->quantity);
            }

        });

        static::updating(function($transaction)
        {
            $oldtransaction=StockTransaction::find($transaction->id);
            // Stock::firstOrCreate(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->increment('quantity',$oldtransaction->id);
            if($oldtransaction->type=='in')
            {
                Stock::where(array('equipment_id'=>$oldtransaction->equipment_id,'inventory_id'=>$oldtransaction->inventory_id))->first()->decrement('quantity',$oldtransaction->quantity);
            }
            if($oldtransaction->type=='out')
            {
                Stock::where(array('equipment_id'=>$oldtransaction->equipment_id,'inventory_id'=>$oldtransaction->inventory_id))->first()->increment('quantity',$oldtransaction->quantity);
            }

            if($transaction->type=='in')
            {
                Stock::firstOrCreate(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->increment('quantity',$transaction->quantity);
            }

            if($transaction->type=='out')
            {
                Stock::firstOrCreate(array('equipment_id'=>$transaction->equipment_id,'inventory_id'=>$transaction->inventory_id))->decrement('quantity',$transaction->quantity);
            }
        });
    }    
}
