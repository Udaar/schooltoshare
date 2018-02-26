<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Item;
use InfyOm\Generator\Common\BaseRepository;

class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'barcode',
        'category_id',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Item::class;
    }
}
