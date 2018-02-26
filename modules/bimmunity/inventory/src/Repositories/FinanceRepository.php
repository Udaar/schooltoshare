<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Finance;
use InfyOm\Generator\Common\BaseRepository;

class FinanceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
//        'name',
//        'created_by',
//        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Finance::class;
    }
}
