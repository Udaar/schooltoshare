<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Bank;
use InfyOm\Generator\Common\BaseRepository;

class BankRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bank::class;
    }
}
