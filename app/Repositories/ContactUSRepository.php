<?php

namespace App\Repositories;

use App\Models\ContactUS;
use InfyOm\Generator\Common\BaseRepository;

class ContactUSRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'phone',
        'Message'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ContactUS::class;
    }
}
