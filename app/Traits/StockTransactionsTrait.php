<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Response;

use App\Models\StockTransaction;
use App\Models\Stock;

trait StockTransactionsTrait
{

    /**
     * Store a newly created StockTransaction in storage.
     *
     * @param CreateStockTransactionRequest $request
     *
     * @return Response
     */
    public function setStockTransaction($input = [])
    {        
        // if the transaction is out. Make sure that there's enough quantity in the stock before proceeding.
        if($input['type']=='out')
        {
             $stock = Stock::where(array('equipment_id'=>$input['equipment_id'], 'inventory_id'=>$input['inventory_id']))->first();
            if(empty($stock) || $input['quantity'] > $stock->quantity){
                Flash::error('Quantity insufficient');
                return ['success' => false];
            }
        }

        $stockTransaction = StockTransaction::create($input);
        Flash::success('Stock Transaction saved successfully.');
        return ['success' => true, 'stockTransaction'=> $stockTransaction];
    }

}