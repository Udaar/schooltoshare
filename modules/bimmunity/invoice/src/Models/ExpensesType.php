<?php

namespace Bimmunity\Invoice\Models;

use Eloquent as Model;

/**
 * Class ExpensesType
 * @package Bimmunity\Invoice\Models
 * @version March 25, 2017, 10:21 am UTC
 */
class ExpensesType extends Model
{
    public $table = 'expenses_types';
    
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
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function expenses()
    {
        return $this->hasMany(\Bimmunity\Invoice\Models\Expense::class);
    }
}
