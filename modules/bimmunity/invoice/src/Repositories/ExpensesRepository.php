<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Expenses;
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

    public function attachInvoices($expense, $invoices = null)
    {
        if (!is_null($invoices) || !empty($invoices))
        {
            $expense->invoices()->sync($invoices, ['invoiceable_type' => Expenses::class]);
        } else
            $expense->invoices()->sync([]);

    }
}
