<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FinanceAccount
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:22 pm UTC
 */
class FinanceAccount extends Model
{
    use SoftDeletes;

    public $table = 'finance_accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'account_number',
        'start_balance',
        'account_type_id',
        'bank_id',
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
        'account_number' => 'string',
        'start_balance' => 'float',
        'account_type_id' => 'integer',
        'bank_id' => 'integer',
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
    public function accountType()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\AccountType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function bank()
    {
        return $this->belongsTo(\Bimmunity\Inventory\Models\Bank::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class,'created_by');
    }
}
