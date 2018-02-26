<?php

namespace Bimmunity\Invoice\Models;

use Eloquent as Model;

/**
 * Class PaymentMethod
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:18 am UTC
 */
class PaymentMethod extends Model
{
    public $table = 'payment_methods';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'  => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function payments()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Payment::class);
    }
}
