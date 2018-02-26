<?php

namespace App\Repositories;

use App\Models\System;
use InfyOm\Generator\Common\BaseRepository;

class SystemRepository extends BaseRepository
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
        return System::class;
    }
}
