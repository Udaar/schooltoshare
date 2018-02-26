<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Facility;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FaciltyRepository
 * @package App\Repositories
 * @version November 22, 2017, 12:06 pm UTC
 *
 * @method Level findWithoutFail($id, $columns = ['*'])
 * @method Level find($id, $columns = ['*'])
 * @method Level first($columns = ['*'])
*/
class FaciltyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'building_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Facility::class;
    }
}
