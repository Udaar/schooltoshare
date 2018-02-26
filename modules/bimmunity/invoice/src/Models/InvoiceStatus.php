<?php

namespace Bimmunity\Invoice\Models;

use App\User;
use Eloquent as Model;

/**
 * Class InvoiceStatus
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:17 am UTC
 */
class InvoiceStatus extends Model
{
    public $table = 'invoice_status';
    
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
        'name'  => 'required|unique:invoice_status,name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function invoices()
    {
        return $this->hasMany(User::class);
    }
}
