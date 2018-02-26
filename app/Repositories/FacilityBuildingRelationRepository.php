<?php

namespace App\Repositories;

use App\Models\FacililtyBuilding;
use InfyOm\Generator\Common\BaseRepository;

class FacilityBuildingRelationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'building_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FacililtyBuilding::class;
    }
}
