<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RoleHasPrivileges
 * @package App\Models
 * @version October 18, 2016, 1:51 pm UTC
 */
class RoleHasPrivileges extends Model
{
    use SoftDeletes;

    public $table = 'roles_has_privileges';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'previliges_id',
        'roles_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'roles_id' => 'integer',
        'previliges_id' => 'integer'
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
    public function privilege()
    {
        return $this->belongsTo(\App\Models\Privilege::class,'previliges_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class,'roles_id');
    }
}
