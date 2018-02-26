<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Sofa\Revisionable\Laravel\RevisionableTrait;
use Sofa\Revisionable\Revisionable;

class Dynamic extends Model
{
    // use RevisionableTrait;
    protected $table='spaces';

    public function __construct($attributes = [],$table='spaces')
    {
        parent::__construct($attributes);
        $this->table=$table;
    }

    /**
     * Dynamically set a model's table.
     *
     * @param  $table
     * @return void
     */
    public function setTable($table)
    {
        $this->table = $table;
        return $this;
    }


    public function request(){
        return $this->morphToMany('Bimmunity\Ticketing\Models\Request', 'vieweable');
    }
}
