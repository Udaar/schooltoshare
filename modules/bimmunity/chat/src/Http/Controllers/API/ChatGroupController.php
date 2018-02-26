<?php

namespace Bimmunity\Chat\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use Bimmunity\Chat\Models\ChatGroup;
use Bimmunity\Chat\Models\Message;
use App\User;
use App\Repositories\FileRepository;
use App\GroupMembers;
use File;
use App\Models\File as F;
class ChatGroupController extends Controller
{
    private $fileRepository;
    
    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
    }
    /*
    *Member type
    *owner->0 admin->1 member->2
    */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function attachFile($base64,$name)
    {
        $file = base64_decode($base64);
        $file_name = $name;
        $destPath ='files/'.\Auth::user()->id.'/'.'upload/'.$file_name;
        if(File::exists($destPath))
        {           
            $file_name = rand().$file_name ;
            $destPath ='files/'.\Auth::user()->id.'/'.'upload/'.$file_name;
        }
        $saved_Path = '/files'.'/'.\Auth::user()->id.'/'.'upload/'.$file_name;
        $path ='files/'.\Auth::user()->id.'/'.'upload/';
        if(!File::exists($path)) {
            // path does not exist
        File::makeDirectory($path, $mode = 0777, true, true);
        }
        // Image::make(file_put_contents($base64))->save($destPath);
        $success =file_put_contents($destPath,$file);
        //return $success;
        
        $extension=File::extension($file_name);
        $f = finfo_open();
        $mime_type = finfo_buffer($f, $file, FILEINFO_MIME_TYPE);
        $fCreated =$this->fileRepository->create(['name'=>$file_name,'extension'=>$extension,'type'=>$mime_type,'path'=>$saved_Path,'size'=>strlen($file),'created_by'=>\Auth::user()->id]);
        return $saved_Path;
    }
    
    public function getTeam()
    {
        $yourTeam = \App\User::all()->keyBy('id');
        //$yourTeam = $yourTeam->forget(\Auth::user()->id);
        // if(\Auth::user()->getParent(\Auth::user()->perent_id) != null)
        // {
        //     $yourTeam=\Auth::user()->getTeam(\Auth::user()->perent_id);
        // }
        // else
        // {
        //     $yourTeam=\Auth::user()->getTeam(\Auth::user()->id);
        // }
        return response()->json(['contacts'=>$yourTeam,'main_info'=>\Auth::user()],200);
    }

    /**
     * Delete Group 
     */
    public function deleteGroup(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$request['groupId'];
        $group = ChatGroup::find($group_id);
        if($group)
            $group->delete();
        else
            return response()->json(['error'=>'Not Found'], 401);

        return response()->json(['Result'=>"true"],200);
    }
    /**
     * Rename Group
     */

    
    public function renameGroup(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'name' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $group =ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->update(['name'=>$_POST['name']]);
        return $_POST['name'];
    }
    /**
     * Make detected Member as an Admin
     */
    public function makeAdmin(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'userId' => 'required|numeric',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $user_id =$_POST['userId'];
        $group = ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->members()->updateExistingPivot($user_id,['type'=>1]);
        return response()->json(['group'=>$group],200);
        
    }
    /**
     * Remove an Admin and grant him a membership
     */
    public function removeAdmin(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'userId' => 'required|numeric',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $user_id =$_POST['userId'];
        $group = ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->members()->updateExistingPivot ($user_id,['type'=>2]);
        return response()->json(['group'=>$group],200);
    }
    /**
     * Add People To the Group form The Team
     */
    public function addPeopleToGroup(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'usersToBeAdded' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $group = ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
         foreach ($_POST['usersToBeAdded'] as $employee) {
            $user=User::find($employee);
            if(!$user)
            {
                return response()->json(['error'=>'Not Found'], 401);
            }
            $group->members()->attach($user->id);
            $group->members()->updateExistingPivot ($user->id,['type'=>2]);
        }
        return response()->json(['Result'=>"true"],200);
    }

    /***
     * Delete Member From the group
     */
    public function deleteMember(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'userId' => 'required|numeric',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $user_id =$_POST['userId'];
        $group = ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->members()->detach($user_id);
        return response()->json(['Result'=>"true"],200);

    }

    /**
     * Change Group Image
     */
    public function changeImage(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
            'myImage' => 'required',
            'name' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $group =ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        if($request['myImage'])
        {
            
            $imagePath = $this->attachFile($request['myImage'],$request['name']);
        }
       /*F for file Model Not laravel file system*/
        $image = F::getFileByPath($imagePath);
        
        if(!$image)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->update(['image_id'=>$image->id]);
        return response()->json(['Result'=>"true"],200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createGroup(Request $request)
    {
        $type = 0;
        $validation = Validator::make($request->all(),[ 
            'name' => 'required',
            'image' => 'required',
            'image_name' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
         $_POST=$request->all();
         if(! empty($_POST['image'])){
                // store the image
                $imagePath = $this->attachFile($request['image'],$request['image_name']);
                $image = F::getFileByPath($imagePath);
                $_POST['image_id']=$image->id;
            }
         $_POST['created_by']=\Auth::user()->id;
         $group = ChatGroup::create($_POST);
         $group->members()->attach(\Auth::user()->id);
         $group->members()->updateExistingPivot (\Auth::user()->id,['type'=>$type]);
         if(!empty($_POST['employees'])){
                foreach (json_decode($_POST['employees']) as $employee) {
                    $user=User::find($employee);
                    if($user == null)
                    {
                        return response()->json(['result'=>['status'=>404,'error'=>'A group created but some users are not found'],'data'=>$group],200);
                    }
                    $group->members()->attach($user->id);
                    $group->members()->updateExistingPivot ($user->id,['type'=>2]);

             }
         }
         $path = $group->image->path;
         $group->image=$path;
         return response()->json(['result'=>['status'=>200,'error'=>null],'data'=>$group],200);
         //return $group;
    }
    /**
     * Leave Group
     */
    public function leaveGroup(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'groupId' => 'required|numeric',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        $_POST = $request->all();
        $group_id=$_POST['groupId'];
        $group =ChatGroup::find($group_id);
        if(!$group)
        {
            return response()->json(['error'=>'Not Found'], 401);
        }
        $group->members()->detach(\Auth::user()->id);
        return response()->json(['Result'=>"true"],200);

    }

    /***
     * Load Groups
     */
    public function getGroups()
    {
        $groups=\Auth::user()->groups;
        foreach ($groups as $key => $group) {
            $group->members= $group->members;
            # code...
        }
        return response()->json(['groups'=>$groups],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

         $group= ChatGroup::find($id);
         $group=\Auth::user()->groups->first();
         //$group= ChatGroup::find($group->id);
        return $group->memberType(\Auth::user()->id);
        dd($group->members()->where('user_id','=',\Auth::user()->id)->first()->pivot->type);
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
   
    public function loadEditModal($id)
    {
        // $group_id=$request['groupId'];
        $group = ChatGroup::find($id);
        return view('chat::ChatGroup.group_chat_edit',compact('group'));

    }
    public function loadGroups()
    {
        return view('chat::ChatGroup.group_list');
    }
   
    
    
    public function loadAddPartial(Request $request, $id)
    {
        $group = ChatGroup::find($id);
        $yourTeam;
        if(\Auth::user()->getParent(\Auth::user()->perent_id) != null)
        {
            $yourTeam=\Auth::user()->getTeam(\Auth::user()->perent_id);
        }
        else
        {
            $yourTeam=\Auth::user()->getTeam(\Auth::user()->id);
        }
        $currentMembers = $group->members;
        $usersToBAdded =$yourTeam->diff($currentMembers);
        return view('chat::ChatGroup.group_add_people_partial',compact('usersToBAdded'));
    }
   
}
