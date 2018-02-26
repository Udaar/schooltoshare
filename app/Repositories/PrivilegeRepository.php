<?php

namespace App\Repositories;

use App\Models\Privilege;
use InfyOm\Generator\Common\BaseRepository;

class PrivilegeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'display_name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Privilege::class;
    }
}
