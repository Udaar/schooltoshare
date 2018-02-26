<?php

namespace App\Repositories;

use App\Models\UserHasPrivileges;
use InfyOm\Generator\Common\BaseRepository;

class UserHasPrivilegesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'previliges_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserHasPrivileges::class;
    }
}
