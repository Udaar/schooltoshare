<?php

namespace App\Repositories;

use App\Models\RoleHasPrivileges;
use InfyOm\Generator\Common\BaseRepository;

class RoleHasPrivilegesRepository extends BaseRepository
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
        return RoleHasPrivileges::class;
    }
}
