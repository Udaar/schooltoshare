<?php

namespace Bimmunity\Bimmodels\Repositories;

use Bimmunity\Bimmodels\Models\Bim_model;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class Bim_modelRepository
 * @package Bimmunity\Bimmodels\Repositories
 * @version October 25, 2017, 11:55 am UTC
 *
 * @method Bim_model findWithoutFail($id, $columns = ['*'])
 * @method Bim_model find($id, $columns = ['*'])
 * @method Bim_model first($columns = ['*'])
*/
class Bim_modelRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'project_code',
        'organization_code',
        'sub_project_code',
        'document_type_code',
        'discipline_code',
        'sub_discipline_code',
        'level_code',
        'urn'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bim_model::class;
    }
}
