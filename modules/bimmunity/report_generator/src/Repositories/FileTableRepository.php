<?php

namespace App\Repositories;

use App\Models\FileTable;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FileTableRepository
 * @package App\Repositories
 * @version September 6, 2017, 8:27 am UTC
 *
 * @method FileTable findWithoutFail($id, $columns = ['*'])
 * @method FileTable find($id, $columns = ['*'])
 * @method FileTable first($columns = ['*'])
*/
class FileTableRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'table_name',
        'table_slug',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FileTable::class;
    }
}
