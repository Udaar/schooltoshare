<?php

namespace Bimmunity\Admindbchange\Repositories;

use Bimmunity\Admindbchange\Models\SysColumns;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SysColumnsRepository
 * @package Bimmunity\Admindbchange\Repositories
 * @version January 9, 2018, 11:25 am UTC
 *
 * @method SysColumns findWithoutFail($id, $columns = ['*'])
 * @method SysColumns find($id, $columns = ['*'])
 * @method SysColumns first($columns = ['*'])
*/
class SysColumnsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'column_original_name',
        'column_admin_name',
        'table_id',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SysColumns::class;
    }
}
