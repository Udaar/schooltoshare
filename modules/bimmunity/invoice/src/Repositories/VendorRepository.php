<?php

namespace Bimmunity\Invoice\Repositories;

use Bimmunity\Invoice\Models\Vendor;
use InfyOm\Generator\Common\BaseRepository;

class VendorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'name',
        'address',
        'work_phone',
        'work_email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendor::class;
    }
}
