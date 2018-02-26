<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Bim_system;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Bim_systemRepository
 * @package Bimmunity\Bimmodels\Repositories
 * @version October 25, 2017, 11:56 am UTC
 *
 * @method Bim_system findWithoutFail($id, $columns = ['*'])
 * @method Bim_system find($id, $columns = ['*'])
 * @method Bim_system first($columns = ['*'])
*/
class Bim_systemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'code',
        'perent_id',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bim_system::class;
    }
}
