<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Asset;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AssetRepository
 * @package Bimmunity\Bimmodels\Repositories
 * @version November 16, 2017, 8:31 am UTC
 *
 * @method Asset findWithoutFail($id, $columns = ['*'])
 * @method Asset find($id, $columns = ['*'])
 * @method Asset first($columns = ['*'])
*/
class AssetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'model',
        'year',
        'building_id',
        'value',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Asset::class;
    }
}
