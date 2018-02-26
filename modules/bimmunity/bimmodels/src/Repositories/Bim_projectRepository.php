<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Bim_project;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Bim_projectRepository
 * @package Bimmunity\Bimmodels\Repositories
 * @version October 25, 2017, 11:57 am UTC
 *
 * @method Bim_project findWithoutFail($id, $columns = ['*'])
 * @method Bim_project find($id, $columns = ['*'])
 * @method Bim_project first($columns = ['*'])
*/
class Bim_projectRepository extends BaseRepository
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
        return Bim_project::class;
    }
}
