<?php

namespace App\Repositories;

use App\Models\FilesRelations;
use InfyOm\Generator\Common\BaseRepository;

class FilesRelationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'file_id',
        'fileable_id',
        'fileable_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return FilesRelations::class;
    }
}
