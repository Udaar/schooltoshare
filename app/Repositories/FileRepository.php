<?php

namespace App\Repositories;

use App\Models\File;
use InfyOm\Generator\Common\BaseRepository;

class FileRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'extension',
        'type',
        'path',
        'category_id',
        'folder_id',
        'created_by'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return File::class;
    }
}
