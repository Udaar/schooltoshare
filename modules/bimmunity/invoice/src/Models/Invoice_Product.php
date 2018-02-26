<?php

namespace Bimmunity\Invoice\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice_Product extends Model
{
    public $table = 'invoice_products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'invoice_id',
        'product_id',
        'quantity'
    ];

    protected $casts = [
        'invoice_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer'
    ];
}
