<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Inventory;
use InfyOm\Generator\Common\BaseRepository;

class InventoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'store_id',
        'item_id',
        'quantity',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Inventory::class;
    }
}
