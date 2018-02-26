<?php

namespace Bimmunity\Invoice\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Payment
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:20 am UTC
 */
class Payment extends Model
{
    use SoftDeletes;

    public $table = 'payments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'method_id',
        'account_id',
        'invoice_id',
        'details_id',
        'status_id',
        'amount',
        'payment_time',
        'currency_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'method_id' => 'integer',
        'account_id'=>'integer',
        'invoice_id'=>'integer',
        'details_id' => 'integer',
        'status_id' => 'integer',
        'currency_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'method_id' => 'required',
        'status_id' => 'required',
        'account_id'=>'required',
        // 'amount'    => 'required',
        'currency_id' => 'required',
        'payment_time' => 'required'
    ];

    /**
     * Get all of the payment's invoices.
     */
    public function invoices()
    {
        return $this->morphToMany(\Bimmunity\Invoice\Models\Invoice::class, 'invoiceable')->withTimestamps();;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function currency()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Currency::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function paymentDetail()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\PaymentDetails::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function method()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\PaymentMethod::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\PaymentStatus::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
