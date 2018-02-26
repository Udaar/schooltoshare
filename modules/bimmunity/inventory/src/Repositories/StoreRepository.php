<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Store;
use InfyOm\Generator\Common\BaseRepository;

class StoreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'number',
        'name',
        'position',
        'responsible_by',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Store::class;
    }
}
