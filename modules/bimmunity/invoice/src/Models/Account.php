<?php

namespace Bimmunity\Invoice\Models;
use Bimmunity\Invoice\Models\Payment;
use Bimmunity\Invoice\Models\Expenses;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    public $table = 'accounts';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $fillable = [
        'name',
        'type',
        'number',
        'balance',
        'currency'
    ];

    protected $casts = [
        'name' => 'string',
        'type' => 'string',
        'number' => 'integer',
        'balance' => 'integer',
        'currency' => 'integer'
    ];

    public static $rules = [
        
    ];


    public function currencycode()
    {
        return $this->belongsTo(\Bimmunity\Invoice\Models\Currency::class,'currency');
    }

    protected $appends = array('finalbalance');

    public function getFinalbalanceAttribute()
    {
        $to= $this->currencycode->code;
        $payments=Payment::all();
        $expenses = Expenses::all();
        $payamount=0;
        $expenseamount=0;
        foreach($payments as $payment){
            $payamount += $this->getCurrencyConverted($payment->amount,$payment->currency->code,$to);
        }
        foreach($expenses as $expense){
            $expenseamount += $this->getCurrencyConverted($expense->amount,$expense->currency->code,$to);
        }
        return $this->balance + ($payamount - $expenseamount ); 
    }

    function getCurrencyConverted($amount,$from,$to){
        if($from!=$to){
            $url  = "https://finance.google.com/finance/converter?a=".$amount."&from=".$from."&to=".$to;
            $data = file_get_contents($url);
            preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
            $converted = preg_replace("/[^0-9.]/", "", $converted);
            return round($converted, 3);
        }
        else
           return $amount;
            
    }
}
