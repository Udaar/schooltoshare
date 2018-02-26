<?php

namespace Bimmunity\Invoice\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Expenses
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:21 am UTC
 */
class Expenses extends Model
{
    use SoftDeletes;

    public $table = 'expenses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'type_id',
        'description',
        'amount',
        'time',
        'notes',
        'currency_id',
        'account_id',
        'vendor_id',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'type_id' => 'integer',
        'description' => 'string',
        'notes' => 'string',
        'currency_id' => 'integer',
        'account_id'   => 'integer',
        'vendor_id'   => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type_id'       => 'required',
        'amount'        => 'required',
        'currency_id'   => 'required',
        'account_id'   => 'required',
        'vendor_id'   => 'required',
        'time'          => 'required'
    ];

    /**
     * Get all of the expense's invoices.
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
    public function type()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\ExpensesType::class);
    }

    public function account()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Account::class);
    }

    public function vendor()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Vendor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function files()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->withPivot('is_profile');
    }
}
