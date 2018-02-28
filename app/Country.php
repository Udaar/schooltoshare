<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name',
                           'code',
                            'continent',
                            'region',
                            'surface_area',
                            'indep_year',
                            'population',
                            'life_expectancy',
                            'gnp',
                            'gnp_old',
                            'local_name',
                            'government_form',
                            'head_of_state',
                            'capital',
                            'code2',];
    public function cities(){
        return $this->hasMany('App\City','country_code','code');
    }
}
