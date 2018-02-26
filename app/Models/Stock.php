<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Stock
 * @package App\Models
 * @version October 18, 2016, 1:41 pm UTC
 */
class Stock extends Model
{
    use SoftDeletes;

    public $table = 'stock';
    // protected $appends = ['quantity'];
    
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'equipment_id',
        'inventory_id',
        'quantity',
        'minmum_quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'equipment_id' => 'integer',
        'inventory_id' => 'integer',
        'quantity' => 'integer',
        'minmum_quantity' => 'string'
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

    public function getQuantityAttribute($value='')
    {
        $equipment_id=$this->equipment_id;
        $inventory_id=$this->inventory_id;
       return StockTransaction::where(array('equipment_id'=>$equipment_id,'inventory_id'=>$inventory_id,'type'=>'in'))->get()->sum('quantity')-StockTransaction::where(array('equipment_id'=>$equipment_id,'type'=>'out'))->get()->sum('quantity');

       // return $this->imports->sum('quantity')-$this->consumes->sum('quantity');
    }
}
