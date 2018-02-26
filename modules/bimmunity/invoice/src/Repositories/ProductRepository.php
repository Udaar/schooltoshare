<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Product;
use InfyOm\Generator\Common\BaseRepository;

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'unit_cost',
        'discount',
        'apply_tax',
        'currency_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Product::class;
    }
}
