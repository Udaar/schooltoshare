<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Payment;
use InfyOm\Generator\Common\BaseRepository;

class PaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'method_id',
        'details_id',
        'status_id',
        'invoice_id',
        'amount',
        'payment_time',
        'currency_id',
        'document_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Payment::class;
    }

    public function attachInvoices($payment, $invoices = null)
    {
        if (!is_null($invoices) || !empty($invoices))
        {
            $payment->invoices()->sync($invoices, ['invoiceable_type' => Payment::class]);
        } else
            $payment->invoices()->sync([]);

    }
}
