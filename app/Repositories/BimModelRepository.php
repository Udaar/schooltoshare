<?php

namespace App\Repositories;

use App\Models\BimModel;
use InfyOm\Generator\Common\BaseRepository;

class BimModelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'urn'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BimModel::class;
    }
}
