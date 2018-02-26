<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class FileTable
 * @package App\Models
 * @version September 6, 2017, 8:27 am UTC
 *
 * @property string table_name
 * @property string table_slug
 * @property string description
 * @property integer created_by
 * @property boolean element_status
 */
class FileTable extends Model
{
    use SoftDeletes;

    public $table = 'file_table';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'table_name',
        'table_slug',
        'description',
        'created_by',
        'element_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'table_name' => 'string',
        'table_slug' => 'string',
        'description' => 'string',
        'created_by' => 'integer',
        'element_status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
