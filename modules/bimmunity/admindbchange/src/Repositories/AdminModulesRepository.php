<?php

namespace Bimmunity\Admindbchange\Repositories;

use Bimmunity\Admindbchange\Models\AdminModules;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AdminModulesRepository
 * @package Bimmunity\Admindbchange\Repositories
 * @version January 10, 2018, 1:49 pm UTC
 *
 * @method AdminModules findWithoutFail($id, $columns = ['*'])
 * @method AdminModules find($id, $columns = ['*'])
 * @method AdminModules first($columns = ['*'])
*/
class AdminModulesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'module_name',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AdminModules::class;
    }
}
