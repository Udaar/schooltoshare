<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\PaymentDetails;
use InfyOm\Generator\Common\BaseRepository;

class PaymentDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'credit_id',
        'routing_num',
        'cvv',
        'expiration_date',
        'bank_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentDetails::class;
    }
}
