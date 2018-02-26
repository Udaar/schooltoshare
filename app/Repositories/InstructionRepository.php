<?php

namespace App\Repositories;

use App\Models\Instruction;
use InfyOm\Generator\Common\BaseRepository;

class InstructionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'steps'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Instruction::class;
    }
}
