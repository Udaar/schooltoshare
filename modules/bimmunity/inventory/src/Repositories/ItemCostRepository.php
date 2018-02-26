<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\ItemCost;
use InfyOm\Generator\Common\BaseRepository;

class ItemCostRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'item_id',
        'cost',
        'is_current',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ItemCost::class;
    }
}
