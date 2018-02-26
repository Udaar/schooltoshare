<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\CompanyAccount;
use InfyOm\Generator\Common\BaseRepository;

class CompanyAccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'account_number',
        'account_type_id',
        'bank_id',
        'company_id',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return CompanyAccount::class;
    }
}
