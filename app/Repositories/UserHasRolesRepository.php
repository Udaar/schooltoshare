<?php

namespace App\Repositories;

use App\Models\UserHasRoles;
use InfyOm\Generator\Common\BaseRepository;

class UserHasRolesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'roles_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserHasRoles::class;
    }
}
