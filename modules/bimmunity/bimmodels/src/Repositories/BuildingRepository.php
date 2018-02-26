<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Building;
use InfyOm\Generator\Common\BaseRepository;

class BuildingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'year',
        'address',
        'phone',
        'category_id',
        'site_id',
        'emergency_info',
        'gps_lat',
        'gps_long'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Building::class;
    }
}
