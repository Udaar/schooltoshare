<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\PaymentStatus;
use InfyOm\Generator\Common\BaseRepository;

class PaymentStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PaymentStatus::class;
    }
}
