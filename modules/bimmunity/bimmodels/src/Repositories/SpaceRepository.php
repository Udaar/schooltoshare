<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Space;
use InfyOm\Generator\Common\BaseRepository;

class SpaceRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Space::class;
    }
}
