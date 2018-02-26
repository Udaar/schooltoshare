<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\ExpensesType;
use InfyOm\Generator\Common\BaseRepository;

class ExpensesTypeRepository extends BaseRepository
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
        return ExpensesType::class;
    }
}
