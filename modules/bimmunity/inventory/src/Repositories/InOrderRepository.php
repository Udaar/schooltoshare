<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\InOrder;
use InfyOm\Generator\Common\BaseRepository;

class InOrderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_number',
        'date_required',
        'date_received',
        'company_id',
        'finance_approved_by',
        'finance_approved_date',
        'status',
        'cost',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InOrder::class;
    }
}
