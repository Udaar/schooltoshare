<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\InOrderItem;
use InfyOm\Generator\Common\BaseRepository;

class InOrderItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_id',
        'quantity',
        'inventory_id',
        'qc_quality_check',
        'qc_quantity_check',
        'qc_quality_check_date',
        'qc_quantity_check_date',
        'qc_quality_check_by',
        'qc_quantity_check_by',
        'cost',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InOrderItem::class;
    }
}
