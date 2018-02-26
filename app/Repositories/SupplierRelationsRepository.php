<?php

namespace App\Repositories;

use App\Models\SupplierRelations;
use InfyOm\Generator\Common\BaseRepository;

class SupplierRelationsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'object_id',
        'supplier_id',
        'object_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SupplierRelations::class;
    }
}
