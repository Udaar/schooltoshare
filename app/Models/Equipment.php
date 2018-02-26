<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Equipment
 * @package App\Models
 * @version October 18, 2016, 1:22 pm UTC
 */
class Equipment extends Model
{
    use SoftDeletes;

    public $table = 'equipments';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'barcode',
        'zone_price',
        'category_id',
        'minmum_quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'barcode' => 'string',
        'zone_price' => 'integer',
        'category_id' => 'integer',
        'minmum_quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function requests()
    {
        return $this->hasMany(\Bimmunity\Ticketing\Models\Request::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stocks()
    {
        return $this->hasMany(\App\Models\Stock::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function stockTransactions()
    {
        return $this->hasMany(\App\Models\StockTransaction::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function zones()
    {
        return $this->belongsToMany(\Bimmunity\Bimmodels\Models\Zone::class, 'zones_has_equipments')->withPivot('installation_date_time', 'note')->withTimestamps();
    }
}
