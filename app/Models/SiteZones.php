<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class SiteZones
 * @package App\Models
 * @version October 18, 2016, 1:46 pm UTC
 */
class SiteZones extends Model
{
    use SoftDeletes;

    public $table = 'site_zones';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
    'name',
    'category_id',
    'parent_id',
    'site_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
    'id' => 'integer',
    'name' => 'string',
    'category_id' => 'integer',
    'parent_id' => 'integer',
    'site_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
    'name' => 'required|min:3',
    'site_id' => 'required',
    'category_id' => 'required',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function site()
    {
        return $this->belongsTo(\App\Models\Site::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function parent()
    {
        return $this->belongsTo(\App\Models\SiteZones::class);
    }
    
    /**
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    **/
    public function childs()
    {
        return $this->hasMany(\App\Models\SiteZones::class, 'parent_id');
    }
}
