<?php

namespace App\Repositories;

use App\Models\ExpensesType;
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
