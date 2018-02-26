<?php

namespace App\Repositories;

use App\Models\Folder;
use InfyOm\Generator\Common\BaseRepository;

class FolderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'parent_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Folder::class;
    }
}
