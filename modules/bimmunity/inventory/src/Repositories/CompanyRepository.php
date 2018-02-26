<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Company;
use InfyOm\Generator\Common\BaseRepository;

class CompanyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'phone',
        'mobile1',
        'mobile2',
        'mobile3',
        'fax',
        'email',
        'company_type',
        'debit',
        'credit',
        'total_value',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Company::class;
    }
}
