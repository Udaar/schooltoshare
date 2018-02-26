<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_Service extends Model
{
    protected $table = 'company_services';
    protected $fillable = ['name','profile_id','description','type'];
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];

    protected $casts = [
        'id' => 'integer',
        'type' => 'string',
        'profile_id' => 'integer',
        'description' => 'string',
        'name' => 'string'
    ];


    public function profile(){
        return $this->belongsTo('\Bimmunity\Ticketing\Models\Profile');
    }
}
