<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Site
 * @package App\Models
 * @version October 18, 2016, 1:45 pm UTC
 */
class Site extends Model
{
    use SoftDeletes;

    public $table = 'sites';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'year',
        'address',
        'phone',
        'category_id',
        'emergency_info',
        'gps_lat',
        'gps_long'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'address' => 'string',
        'phone' => 'string',
        'category_id' => 'integer',
        'emergency_info' => 'string',
        'gps_lat' => 'string',
        'gps_long' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
        'category_id' => 'required',
        'gps_lat' => 'gps',
        'gps_long' => 'gps',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function buildings()
    {
        return $this->hasMany(\Bimmunity\Bimmodels\Models\Building::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function siteZones()
    {
        return $this->hasMany(\App\Models\SiteZone::class);
    }

    public function files()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->withPivot('is_profile');
    }

    public function profile()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->wherePivot('is_profile',1);
        // return $this->morphToMany('App\Models\File', 'fileable')->withPivot('is_profile')->where();
    }

    public function profilePicture($value='')
    {
        return $this->morphToMany('App\Models\File', 'fileable')->wherePivot('is_profile',1)->first();
    }

}
