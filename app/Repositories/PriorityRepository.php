<?php

namespace App\Repositories;

use App\Models\Priority;
use InfyOm\Generator\Common\BaseRepository;

class PriorityRepository extends BaseRepository
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
        return Priority::class;
    }
}
