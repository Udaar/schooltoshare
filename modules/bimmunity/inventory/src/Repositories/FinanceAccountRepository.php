<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\FinanceAccount;
use InfyOm\Generator\Common\BaseRepository;

class FinanceAccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'account_number',
        'start_balance',
        'account_type_id',
        'bank_id',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FinanceAccount::class;
    }
}
