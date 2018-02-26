<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
/**
 * Class Privilege
 * @package App\Models
 * @version October 18, 2016, 1:52 pm UTC
 */
class Privilege extends Model
{
    use SoftDeletes;

    public $table = 'privileges';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'display_name',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'display_name' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function roles()
    {
        return $this->belongsToMany(\App\Models\Role::class, 'roles_has_privileges','previliges_id','roles_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function users()
    {
        return $this->belongsToMany(\App\User::class, 'users_has_privileges');
    }


    static function getAllPermissions()
    {
        foreach (\Route::getRoutes()->getRoutes() as $key=>$route)
        {
            $action = $route->getAction();

            if (array_key_exists('controller', $action))
            {
                // You can also use explode('@', $action['controller']); here
                // to separate the class name from the method
                $controllerWithAction = class_basename($action['controller']);
                $arr = explode("Controller",$controllerWithAction, 2);
                $permissions[]=[
                    'name'=>$controllerWithAction,
                    'display_name'=>ucfirst(str_replace("index","List",substr($arr[1],1))).' '.ucfirst($arr[0]),
                    'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at'=>Carbon::now()->format('Y-m-d H:i:s')
                    ];
            }
        }
        return collect($permissions)->unique()->toArray();
    }
}
