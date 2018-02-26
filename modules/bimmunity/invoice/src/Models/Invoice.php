<?php

namespace Bimmunity\Invoice\Models;

use App\User;
use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Invoice
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:47 am UTC
 */
class Invoice extends Model
{
    use SoftDeletes;

    public $table = 'invoices';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'amount',
        'customer_id',
        'title',
        'code',
        'description',
        'terms',
        'issue_date',
        'due_date',
        'total',
        'discount',
        'status_id',
        'currency_id',
        'document_id',
        'created_by',
        'updated_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'amount' => 'integer',
        'customer_id' => 'integer',
        'code'  => 'string',
        'title' => 'string',
        'description' => 'string',
        'terms' => 'string',
        'status_id' => 'integer',
        'currency_id' => 'integer',
        'document_id' => 'integer',
        'created_by' => 'integer',
        'updated_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title'         => 'required',
        
        'status_id'     => 'required',
        'issue_date'    => 'required|date',
        'due_date'      => 'required|date',
    ];

    /**
     * Set the user's first name.
     *
     * @param  string  $value
     * @return void
     */
    public function setCustomerIdAttribute($value)
    {
        $this->attributes['customer_id'] = $value ?: null;
    }


    /**
     * Get all of the payments that are assigned this invoice.
     */
    public function payments()
    {
        return $this->morphedByMany(Payment::class, 'invoiceable');
    }

    /**
     * Get all of the expenses that are assigned this invoice.
     */
    public function expenses()
    {
        return $this->morphedByMany(Expenses::class, 'invoiceable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(User::class);
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
    public function customer()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Customer::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function document()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Document::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function status()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\InvoiceStatus::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function account()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Account::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->belongsToMany('\Bimmunity\Invoice\Models\Product', 'invoice_products')->withPivot('quantity');
    }
    public function IsPaied(){
        if(count($this->payments))
           return true;
        else
           return false;    
    }
   
}
