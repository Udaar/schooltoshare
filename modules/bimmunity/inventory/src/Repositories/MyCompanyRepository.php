<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\MyCompany;
use InfyOm\Generator\Common\BaseRepository;

class MyCompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'debit',
        'credit',
        'total_balance',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return MyCompany::class;
    }
}
