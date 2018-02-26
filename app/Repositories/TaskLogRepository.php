<?php

namespace App\Repositories;

use App\Models\TaskLog;
use InfyOm\Generator\Common\BaseRepository;

class TaskLogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'task_id',
        'status',
        'date_time',
        'note'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return TaskLog::class;
    }
}
