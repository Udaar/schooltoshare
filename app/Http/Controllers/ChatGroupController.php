<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ChatGroup;
use App\User;
use App\Models\File;
use App\GroupMembers;

class ChatGroupController extends Controller
{
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type = 0;
         $this->validate($request, [
                'name' => 'required',
            ]);
         $input=$request->all();
         if(! empty($input['image'])){
                // store the image
                $image = File::getFileByPath($input['image']);
                $input['image_id']=$image->id;
            }
         $input['created_by']=\Auth::user()->id;
         $group = ChatGroup::create($input);
         $group->members()->attach(\Auth::user()->id);
         $group->members()->updateExistingPivot (\Auth::user()->id,['type'=>$type]);
         if(!empty($input['employees'])){
                foreach ($input['employees'] as $employee) {
                    $user=User::find($employee);
                        $group->members()->attach($user->id);
                        $group->members()->updateExistingPivot ($user->id,['type'=>2]);

             }
         }
         flash()->success("Group has been Created");
         $path = $group->image->path;
         $group->image=$path;
         return $group;
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

    public function deleteGroup(Request $request)
    {
        $group_id=$request['groupId'];
        $group = ChatGroup::find($group_id);
        $group->delete();
    }
    public function leaveGroup(Request $request)
    {
        $group_id=$request['groupId'];
        $group = ChatGroup::find($group_id);
        $group->members()->detach(\Auth::user()->id);

    }
    public function loadEditModal($id)
    {
        // $group_id=$request['groupId'];
        $group = ChatGroup::find($id);
        return view('layouts.group_chat_edit',compact('group'));

    }
    public function changeGroupName(Request $request,$id)
    {
        $group =ChatGroup::find($id);
        $group->update(['name'=>$request['name']]);
        return $request['name'];
    }
    public function loadGroups()
    {
        return view('layouts.group_list');
    }
    public function changeImage(Request $request)
    {
        $group =ChatGroup::find($request['groupId']);
        $image = File::getFileByPath($request['myImage']);
        $group->update(['image_id'=>$image->id]);
        // dd($request['myImage']);
        return $request['myImage'];
    }
    public function deleteMember(Request $request)
    {
        //return $request->all();
        $group_id=$request['groupId'];
        $user_id =$request['userId'];
        $group = ChatGroup::find($group_id);
        $group->members()->detach($user_id);

    }
    public function makeAdmin(Request $request)
    {
        $group_id=$request['groupId'];
        $user_id =$request['userId'];
        $group = ChatGroup::find($group_id);
        $group->members()->updateExistingPivot ($user_id,['type'=>1]);
        return view('layouts.member_type_partial',compact('group'));
    }
    public function removeAdmin(Request $request)
    {
        $group_id=$request['groupId'];
        $user_id =$request['userId'];
        $group = ChatGroup::find($group_id);
        $group->members()->updateExistingPivot ($user_id,['type'=>2]);
        return view('layouts.member_type_partial',compact('group'));
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
        return view('layouts.group_add_people_partial',compact('usersToBAdded'));
    }
    public function addPeopleToGroup(Request $request)
    {
        $group_id=$request['groupId'];
        $group = ChatGroup::find($group_id);
         foreach ($request['usersToBeAdded'] as $employee) {
            $user=User::find($employee);
                $group->members()->attach($user->id);
                $group->members()->updateExistingPivot ($user->id,['type'=>2]);
        }
        return "true";
    }
}
