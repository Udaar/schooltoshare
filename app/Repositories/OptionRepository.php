<?php

namespace App\Repositories;

use App\Models\Option;
use InfyOm\Generator\Common\BaseRepository;

class OptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'value',
        'category_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Option::class;
    }
}
