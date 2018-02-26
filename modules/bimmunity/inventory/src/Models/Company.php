<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Company
 * @package Bimmunity\Inventory\Models
 * @version June 14, 2017, 12:21 pm UTC
 */
class Company extends Model
{
    use SoftDeletes;

    public $table = 'companies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'address',
        'phone',
        'mobile1',
        'mobile2',
        'mobile3',
        'fax',
        'email',
        'company_type',
        'debit',
        'credit',
        'total_value',
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
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'mobile1' => 'string',
        'mobile2' => 'string',
        'mobile3' => 'string',
        'fax' => 'string',
        'email' => 'string',
        'company_type' => 'string',
        'debit' => 'float',
        'credit' => 'float',
        'total_value' => 'float',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function companyAccounts()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\CompanyAccount::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function inOrders()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\InOrder::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function orderPayments()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\OrderPayment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function outOrders()
    {
        return $this->hasMany(\Bimmunity\Inventory\Models\OutOrder::class);
    }
}
