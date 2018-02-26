<?php

namespace App\Listeners;

use Unisharp\Laravelfilemanager\Events\ImageWasUploaded;
use Unisharp\Laravelfilemanager\Events\ImageIsRenaming;
use Unisharp\Laravelfilemanager\Events\ImageWasRenamed;
use Unisharp\Laravelfilemanager\Events\ImageWasDeleted;
use Unisharp\Laravelfilemanager\Events\ImageWasCropped;
use Unisharp\Laravelfilemanager\Events\ImageIsCropping;
use Unisharp\Laravelfilemanager\Events\ImageWasResized;
use Unisharp\Laravelfilemanager\Events\FolderWasRenamed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\File;


class UploadListener
{
    public function subscribe($events)
    {
        $events->listen('*', UploadListener::class);
    }
    public function handle($event)
    {
        $method = 'on'.class_basename($event);
        if (method_exists($this, $method)) {
            call_user_func([$this, $method], $event);
        }
    }

    public function onImageWasUploaded(ImageWasUploaded $event)
    {
        $path = $event->path();
        $file=File::store($path);
    }
    // public function onImageIsRenaming(ImageIsRenaming $event){
    //     dd($event);
    // }
    public function onFolderWasRenamed(FolderWasRenamed $event)
    {
        $old_path = $event->oldPath();
        $new_path = $event->newPath();

        $oldfile = new File;
        $oldfile = new File;
        
        $old_path_string=str_replace(public_path(),"",$old_path);
        $old_path_string=str_replace('\\', '/', $old_path_string);
        $old_file_objs = File::where('path', 'like', '%'.$old_path_string.'%')->get();
        $new_path = str_replace(public_path(),"",$new_path);
        $new_path = str_replace('\\', '/', $new_path);
        foreach ($old_file_objs as $key => $obj) {
            $path = $obj->path;
            $path = str_replace($old_path_string,$new_path , $path);
            $obj->update(['path'=>$path]);
            # code...
        }
    }
    public function onImageWasRenamed(ImageWasRenamed $event)
    {
        
        $old_path = $event->oldPath();
        $new_path = $event->newPath();
        $oldfile = new File;
        $old_path_string=str_replace(public_path(),"",$old_path);
        $old_path_string=str_replace('\\', '/', $old_path_string);
        $old_file_obj = File::where('path','=',$old_path_string)->first();
        $newfile=new File;
        $newfile->name=basename($new_path);
        $newfile->size=filesize($new_path);           
        $newfile->path=explode("public",str_replace('\\', '/', $new_path))[1];
        $newfile->extension=pathinfo($newfile, PATHINFO_EXTENSION);
        $old_file_obj->update(['name'=>$newfile->name,'path'=>$newfile->path,'extension'=>$newfile->extension]);
        
    }
    public function onImageWasDeleted(ImageWasDeleted $event)
    {
        $file=new File;
        $path = $event->path();
        $file->path=explode("public",str_replace('\\', '/', $path))[1];
        $fileObj = File::where('path','=',$file->path)->first();
        $fileObj->delete();
    }
    public function onImageWasCropped(ImageWasCropped $event)
    {
        $file=new File;
        $path = $event->path();
        $file->path=explode("public",str_replace('\\', '/', $path))[1];
        $file->size=filesize($path);
        $fileObj = File::where('path','=',$file->path)->first();
        $fileObj->size=$file->size;
        $fileObj->save();        
    }
    public function onImageWasResized(ImageWasResized $event)
    {
        $file=new File;
        $path = $event->path();
        $file->path=explode("public",str_replace('\\', '/', $path))[1];
        $file->size=filesize($path);
        $file->size=filesize($path);
        $fileObj = File::where('path','=',$file->path)->first();
        $fileObj->size=$file->size;
        $fileObj->save();        
    }
   
}