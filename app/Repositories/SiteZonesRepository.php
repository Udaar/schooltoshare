<?php

namespace App\Repositories;

use App\Models\SiteZones;
use InfyOm\Generator\Common\BaseRepository;

class SiteZonesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'category_id',
        'parent_id',
        'site_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SiteZones::class;
    }
}
