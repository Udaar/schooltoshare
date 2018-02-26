<?php

namespace App\Repositories;

use App\Models\ServiceProviderBuilding;
use InfyOm\Generator\Common\BaseRepository;

class ServiceProviderBuildingRelationRepository extends BaseRepository
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
        return ServiceProviderBuilding::class;
    }
}
