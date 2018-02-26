<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class File
 * @package App\Models
 * @version October 18, 2016, 1:23 pm UTC
 */
class File extends Model
{
    use SoftDeletes;

    public $table = 'files';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'extension',
        'type',
        'path',
        'category_id',
        'folder_id',
        'created_by'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'extension' => 'string',
        'type' => 'string',
        'path' => 'string',
        'category_id' => 'integer',
        'folder_id' => 'integer',
        'created_by' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function folder()
    {
        return $this->belongsTo(\App\Models\Folder::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function filesRelations()
    {
        return $this->hasMany(\App\Models\FilesRelation::class);
    }
    public static function store($path,$old=false)
    {
            $file=new File;
            $file->name=basename($path);
            if($old){
                $file->path=parse_url($path, PHP_URL_PATH);
            }
            else{
                $file->size=filesize($path);           
                $file->path=explode("public",str_replace('\\', '/', $path))[1];
                $file->type=mime_content_type($path);
                $file->created_by=\Auth::user()->id;
            }
            $file->extension=pathinfo($path, PATHINFO_EXTENSION);
            $file->save();
            \App\PathPermission::create(['user_id'=>\Auth::user()->id,'path_id'=>$file->id,'type'=>0,'permission'=>111]);
            return $file->id;
    }
    public static function getFileByPath($path='')
    {
        if(is_array($path)){
            foreach ($path as $key=>$pth) {
                $path[$key]=parse_url($pth,PHP_URL_PATH);;
            }
             return File::whereIn('path',$path)->get();
        }
        $file= File::where('path',parse_url($path,PHP_URL_PATH))->first();
        if($file)
            return $file;
       return $file=File::store($path,true);
    }

    public static function upload($filesData,$destinationPath)
    {
            $id=array();
            foreach($filesData as $fileData ){
                $file=new File;
                $file->name=rand(11111,99999).$fileData->getClientOriginalName();
                $file->extension=$fileData->getClientOriginalExtension();
                $file->size=$fileData->getClientSize();
                $file->path=$destinationPath.'/'.$file->name;
                $fileData->move($destinationPath,$file->name);
                $file->save();
                array_push($id,$file->id);
                
            }
            return $id;
    }
     public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

}
