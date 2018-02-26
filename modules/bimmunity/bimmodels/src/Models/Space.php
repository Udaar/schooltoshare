<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Space
 * @package App\Models
 * @version February 27, 2017, 12:40 pm UTC
 */
class Space extends Model
{
    use SoftDeletes;

    public $table = 'spaces';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


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
        
        'name' => 'string|required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
   
}
