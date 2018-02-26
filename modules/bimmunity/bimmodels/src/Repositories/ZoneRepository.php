<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Zone;
use InfyOm\Generator\Common\BaseRepository;

class ZoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id',
        'parent_id',
        'building_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Zone::class;
    }
}
