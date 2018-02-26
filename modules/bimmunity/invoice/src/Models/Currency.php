<?php

namespace Bimmunity\Invoice\Models;

use Eloquent as Model;

/**
 * Class Currency
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 5:03 pm UTC
 */
class Currency extends Model
{
    public $table = 'currencies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'code',
        'num',
        'name',
        'hex'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'code' => 'string',
        'num' => 'integer',
        'name' => 'string',
        'hex' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Expense::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Invoice::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Payment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Product::class);
    }
}
