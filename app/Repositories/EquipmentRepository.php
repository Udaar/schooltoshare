<?php

namespace App\Repositories;

use App\Models\Equipment;
use InfyOm\Generator\Common\BaseRepository;

class EquipmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'barcode',
        'zone_price',
        'category_id',
        'minmum_quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Equipment::class;
    }
}
