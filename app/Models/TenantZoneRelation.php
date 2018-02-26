<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use App\Models\Invoice;
/**
 * Class TenantZoneRelation
 * @package App\Models
 * @version October 18, 2016, 1:44 pm UTC
 */
class TenantZoneRelation extends Model
{

    public $table = 'tenant_zone_relation';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'user_id',
        'zone_id',
        'from',
        'to',
        'price',
        'duration_num',
        'duration_type'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'zone_id' => 'integer',
        'price' => 'integer',
        'duration_num' => 'integer',
        'duration_type' => 'string'
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
    public function zone()
    {
        return $this->belongsTo(\Bimmunity\Bimmodels\Models\Zone::class);
    }

    
    public function invoices()
    {
        return $this->morphToMany('App\Models\Invoice', 'Invoiceable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\User::class);
    }

    protected $appends = array('shouldInvoice');

    public function getshouldInvoiceAttribute()
    {
    $from=new Carbon($this->from);        
     $invoice=  $this->invoices->last();
        if($invoice){
            $from=new Carbon($invoice->duedate);  
        }
        $to=new Carbon($this->to);
        $durationToNow=0;
        if($this->duration_type=='day'){
            $duration=$from->diffInDays($to); 
            $durationToNow=$from->diffInDays(Carbon::now());           
        }
        if($this->duration_type=='month'){
            $duration=$from->diffInMonths($to);
            $durationToNow=$from->diffInMonths(Carbon::now());           
            
        }
        if($this->duration_type=='year'){
            $duration=$from->diffInYears($to);
            $durationToNow=$from->diffInYears(Carbon::now());           
            
        }
        return $durationToNow;
        

    }
}
