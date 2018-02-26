<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SupplierRelations
 * @package App\Models
 * @version October 18, 2016, 1:45 pm UTC
 */
class SupplierRelations extends Model
{
    use SoftDeletes;

    public $table = 'suppliers_relations';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'object_id',
        'supplier_id',
        'object_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'object_id' => 'integer',
        'supplier_id' => 'integer',
        'object_type' => 'string'
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
    public function supplier()
    {
        return $this->belongsTo(\App\Models\Supplier::class);
    }
}
