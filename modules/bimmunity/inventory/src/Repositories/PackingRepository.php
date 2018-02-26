<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\Packing;
use InfyOm\Generator\Common\BaseRepository;

class PackingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Packing::class;
    }
}
