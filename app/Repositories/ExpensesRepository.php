<?php

namespace App\Repositories;

use App\Models\Expenses;
use InfyOm\Generator\Common\BaseRepository;

class ExpensesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'invoice_id',
        'type_id',
        'description',
        'amount',
        'time',
        'notes',
        'currency_id',
        'document_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Expenses::class;
    }
}
