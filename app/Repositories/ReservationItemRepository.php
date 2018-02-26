<?php

namespace App\Repositories;

use App\Models\ReservationItem;
use InfyOm\Generator\Common\BaseRepository;

class ReservationItemRepository extends BaseRepository
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
        return ReservationItem::class;
    }
}
