<?php

namespace Bimmunity\Inventory\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class AcceptedRecords
 * @package Bimmunity\Inventory\Models
 * @version August 14, 2017, 1:27 pm UTC
 */
class AcceptedRecords extends Model
{
    use SoftDeletes;

    public $table = 'accepted_records';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'accepted_by',
        'accepted_date',
        'related_module',
        'related_module_id',
        'notes',
        'status',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'accepted_by' => 'integer',
        'related_module' => 'string',
        'related_module_id' => 'integer',
        'notes' => 'string'
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
        return $this->belongsTo(\App\User::class);
    }
}
