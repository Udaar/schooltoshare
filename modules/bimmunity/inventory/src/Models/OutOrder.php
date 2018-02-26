<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class OutOrder
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:22 pm UTC
 */
class OutOrder extends Model
{
    use SoftDeletes;

    public $table = 'out_orders';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'order_number',
        'date_required',
        'date_received',
        'company_id',
        'finance_approved_by',
        'finance_approved_date',
        'status',
        'cost',
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
        'order_number' => 'string',
        'company_id' => 'integer',
        'finance_approved_by' => 'integer',
        'status' => 'integer',
        'cost' => 'float',
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
    public function company()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Company::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class,'created_by');
    }

}
