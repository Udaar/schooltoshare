<?php

namespace App\Repositories;

use App\Models\ZoneHasEquipments;
use InfyOm\Generator\Common\BaseRepository;

class ZoneHasEquipmentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'equipments_id',
        'installation_date_time'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ZoneHasEquipments::class;
    }
}
