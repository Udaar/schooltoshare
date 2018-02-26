<?php

namespace App\Repositories;

use App\Models\StockTransaction;
use InfyOm\Generator\Common\BaseRepository;

class StockTransactionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'transaction_date_time',
        'type',
        'equipment_id',
        'quantity',
        'inventory_id',
        'zone_id',
        'supplier_id',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return StockTransaction::class;
    }
}
