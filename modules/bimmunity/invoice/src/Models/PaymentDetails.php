<?php

namespace Bimmunity\Invoice\Models;

use Eloquent as Model;

/**
 * Class PaymentDetails
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:20 am UTC
 */
class PaymentDetails extends Model
{
    public $table = 'payment_details';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'credit_id',
        'routing_num',
        'cvv',
        'expiration_date',
        'bank_name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'routing_num' => 'integer',
        'cvv' => 'integer',
        'expiration_date' => 'date',
        'bank_name' => 'string'
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
    public function payments()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Payment::class);
    }
}
