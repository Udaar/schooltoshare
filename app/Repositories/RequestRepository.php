<?php

namespace App\Repositories;

use App\Models\Request;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class RequestRepository
 * @package App\Repositories
 * @version February 26, 2018, 2:30 pm UTC
 *
 * @method Request findWithoutFail($id, $columns = ['*'])
 * @method Request find($id, $columns = ['*'])
 * @method Request first($columns = ['*'])
*/
class RequestRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'school_id',
        'activity_id',
        'date'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Request::class;
    }
}
