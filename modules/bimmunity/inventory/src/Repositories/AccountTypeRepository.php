<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\AccountType;
use InfyOm\Generator\Common\BaseRepository;

class AccountTypeRepository extends BaseRepository
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
        return AccountType::class;
    }
}
