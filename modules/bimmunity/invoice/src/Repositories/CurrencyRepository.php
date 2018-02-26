<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Currency;
use InfyOm\Generator\Common\BaseRepository;

class CurrencyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'code',
        'num',
        'name',
        'hex'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Currency::class;
    }
}
