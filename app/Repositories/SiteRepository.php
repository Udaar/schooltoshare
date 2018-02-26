<?php

namespace App\Repositories;

use App\Models\Site;
use InfyOm\Generator\Common\BaseRepository;

class SiteRepository extends BaseRepository
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
        'emergency_info',
        'gps_lat',
        'gps_long'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Site::class;
    }
}
