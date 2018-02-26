<?php

namespace Bimmunity\Inventory\Repositories;

use Bimmunity\Inventory\Models\AcceptedRecords;
use InfyOm\Generator\Common\BaseRepository;

class AcceptedRecordsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'accepted_by',
        'accepted_date',
        'related_module',
        'related_module_id',
        'notes',
        'status',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return AcceptedRecords::class;
    }
}
