<?php

namespace App\Repositories;

use App\Models\Taxonomy;
use InfyOm\Generator\Common\BaseRepository;

class TaxonomyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Taxonomy::class;
    }
}
