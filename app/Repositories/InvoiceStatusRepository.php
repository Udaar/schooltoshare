<?php

namespace App\Repositories;

use App\Models\InvoiceStatus;
use InfyOm\Generator\Common\BaseRepository;

class InvoiceStatusRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return InvoiceStatus::class;
    }
}
