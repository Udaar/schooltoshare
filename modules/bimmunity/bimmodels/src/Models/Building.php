<?php

namespace Bimmunity\Bimmodels\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
/**
 * Class Building
 * @package App\Models
 * @version October 18, 2016, 1:18 pm UTC
 */
class Building extends Model
{
    use SoftDeletes;

    public $table = 'buildings';
    
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
        'gps_long',
        'country',
        'city'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'year' => 'integer',
        'address' => 'string',
        'phone' => 'string',
        'category_id' => 'integer',
        'emergency_info' => 'string',
        'gps_lat' => 'string',
        'gps_long' => 'string',
        'country' => 'string',
        'city' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
        'phone' => 'min:3',
        'gps_lat' => 'gps',
        'gps_long' => 'gps',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function zones()
    {
        return $this->hasMany(\Bimmunity\Bimmodels\Models\Zone::class);
    }

    public function files()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->withPivot('is_profile');
    }
    
    public function galary()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->wherePivot('is_profile',1);
    }
    public function profile()
    {
        return $this->morphToMany('App\Models\File', 'fileable')->wherePivot('is_profile',1);
    }

    public function profilePicture($value='')
    {
        return $this->profile->first();
    }
    public function userbuilding()
    {
        return $this->belongsToMany('App\Models\User','facililtybuildings');
    }
    public function facililtyBuilding()
    {
        return $this->hasMany(\App\Models\FacililtyBuilding::class);
    }
    public static function boot()
    {
        parent::boot();    
    
        // cause a delete of a product to cascade to children so they are also deleted
        static::deleted(function($building)
        {
            foreach ($building->zones as $zone) {
                foreach ($zone->requests as $request) {
                    $request->serviceRequest()->delete();
                    $request->maintenanceRequest()->delete();
                    $request->complaintRequest()->delete();
                    $request->bookingRequest()->delete();
                }
                $zone->requests()->delete();
            }
            $building->zones()->delete();
            $building->facililtyBuilding()->delete();
        });
    }    

   
    protected $appends = array('profilePicture');

    public function getProfilePictureAttribute(){
        if($this->profilePicture())
        return $this->profilePicture()->path;
        

   }
   
    public function bim_models(){
        return $this->hasMany('Bimmunity\Bimmodels\Models\Bim_model');
    }

    public function facilities(){
        return $this->hasMany('Bimmunity\Bimmodels\Models\Facility');
    }
}
