<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\OrderPayment;
use InfyOm\Generator\Common\BaseRepository;

class OrderPaymentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'paid',
        'remains',
        'total_value',
        'company_id',
        'payer_name',
        'paid_date',
        'account_type_id',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return OrderPayment::class;
    }
}
