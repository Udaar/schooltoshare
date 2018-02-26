<?php

namespace Bimmunity\Admindbchange\Repositories;

use Bimmunity\Admindbchange\Models\SysTables;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SysTablesRepository
 * @package Bimmunity\Admindbchange\Repositories
 * @version January 9, 2018, 11:21 am UTC
 *
 * @method SysTables findWithoutFail($id, $columns = ['*'])
 * @method SysTables find($id, $columns = ['*'])
 * @method SysTables first($columns = ['*'])
*/
class SysTablesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'table_original_name',
        'table_admin_name',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SysTables::class;
    }
}
