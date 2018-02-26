<?php

namespace App\Repositories;

use App\Models\Fghdf;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class FghdfRepository
 * @package App\Repositories
 * @version October 26, 2017, 8:49 am UTC
 *
 * @method Fghdf findWithoutFail($id, $columns = ['*'])
 * @method Fghdf find($id, $columns = ['*'])
 * @method Fghdf first($columns = ['*'])
*/
class FghdfRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'fhdfhfdhfdh',
        'ticket_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Fghdf::class;
    }
}
