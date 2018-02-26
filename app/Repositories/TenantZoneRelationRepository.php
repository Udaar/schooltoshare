<?php

namespace App\Repositories;

use App\Models\TenantZoneRelation;
use InfyOm\Generator\Common\BaseRepository;

class TenantZoneRelationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'zone_id',
        'from',
        'to',
        'price',
        'duration_num',
        'duration_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TenantZoneRelation::class;
    }
}
