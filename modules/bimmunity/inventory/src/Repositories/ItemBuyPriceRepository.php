<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\ItemBuyPrice;
use InfyOm\Generator\Common\BaseRepository;

class ItemBuyPriceRepository extends BaseRepository
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
        return ItemBuyPrice::class;
    }
}
