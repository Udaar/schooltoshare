<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\PaymentMethod;
use InfyOm\Generator\Common\BaseRepository;

class PaymentMethodRepository extends BaseRepository
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
        return PaymentMethod::class;
    }
}
