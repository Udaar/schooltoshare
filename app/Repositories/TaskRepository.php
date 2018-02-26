<?php

namespace App\Repositories;

use App\Models\Task;
use InfyOm\Generator\Common\BaseRepository;

class TaskRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'instruction_id',
        'due_date_time',
        'repeat',
        'repeat_every_num',
        'repeate_every_method',
        'assigned_to',
        'is_outsorces',
        'supplier_id',
        'resolved',
        'category_id',
        'request_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Task::class;
    }
}
