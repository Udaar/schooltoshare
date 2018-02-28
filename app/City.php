<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name','country_code','district','population'];
    public function country(){
        return $this->belongsTo('App\Country','code','country_code');
    }
}
