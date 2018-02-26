<?php

namespace App\Repositories;

use App\Models\RequestType;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RequestTypeRepository
 * @package App\Repositories
 * @version August 8, 2017, 4:22 pm UTC
 *
 * @method RequestType findWithoutFail($id, $columns = ['*'])
 * @method RequestType find($id, $columns = ['*'])
 * @method RequestType first($columns = ['*'])
*/
class RequestTypeRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'parent_id',
        'form_type'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return RequestType::class;
    }
}
