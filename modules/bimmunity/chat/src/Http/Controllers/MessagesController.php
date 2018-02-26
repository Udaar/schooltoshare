<?php

namespace Bimmunity\Chat\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Bimmunity\Chat\Models\Message;
use App\User;
use Bimmunity\Chat\Models\Read;
use Bimmunity\Chat\Models\ChatGroup;
use Vinkla\Pusher\Facades\Pusher;


class MessagesController extends Controller
{
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
           $validator = Validator::make($request->all(), [
                'content' => 'required',
            ]);
         if ($validator->fails())
            {
                return \Response::json(array(
                    'success' => false,
                    'errors' => $validator->getMessageBag()->toArray()

                ),422); // 400 being the HTTP code for an invalid request.
            }
         $input=$request->all();
         $input['created_by']=\Auth::user()->id;
         $message = Message::create($input);
         \Auth::user()->messages()->attach($message->id);
         return true;
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getConversations($receiver_id='',$type='')
    {
        $receives=collect();
        $conversations=collect();
        if($type=='group'){
            $conversations=collect(ChatGroup::find($receiver_id)->messages()->with('sender')->get());
        }
        else{
            $receives=collect(\Auth::user()->messages()->with('sender')->where('sender_id',$receiver_id)->get());
            $sends=collect(User::find($receiver_id)->messages()->with('sender')->where('sender_id',\Auth::user()->id)->get());
            if($receiver_id==\Auth::user()->id){
                $conversations=$receives->sortBy('id')->values()->all();
            }
            else {
                $conversations=$receives->merge($sends)->sortBy('id')->values()->all();
            }
        }
        if($receives->last())
            $this->markAsRead($receives->last()->id);
            
        return $conversations;
    }

    public function getRecent()
    {
        // return $receives=collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id');

        // return $receives->filter(function ($value, $key) {
        //                 return count($value->myReads);
        //             });
        
        return vieW('chat::messages.recent');


    }


    public function sendMessage(Request $request,$receiver_id='',$type='')
    {
        $message=Message::create(['content'=>$request->input('content'),'sender_id'=>\Auth::user()->id]);
        if($type=='group'){
            ChatGroup::find($receiver_id)->messages()->attach($message);
             // $receivers=collect(ChatGroup::find($receiver_id)->members)->groupBy('id')->keys();
             $receivers=ChatGroup::find($receiver_id)->members;
             $receiver_ids=[];
             foreach ($receivers as $receiver) {
                 if($receiver->id != \Auth::user()->id)
                 $receiver_ids[]=$receiver->id;
             }
             for($i=0;$i<count($receiver_ids);$i++){
                 $receiver_ids[$i]='bimmunity_'.$receiver_ids[$i];
             }
            Pusher::trigger($receiver_ids, 'message', ['message' => $message,'functionName'=>$request->input('functionName'),'user'=>\Auth::user(),'group'=>ChatGroup::with('image')->find($receiver_id)]);             
            event(new \Bimmunity\Chat\Events\MessageEvent($message, $receiver_ids));
        }else{
            $receiver=User::find($receiver_id);
            $receiver->messages()->attach($message);
            event(new \Bimmunity\Chat\Events\MessageEvent($message,['bimmunity_'.$receiver_id]));
            Pusher::trigger(['bimmunity_'.$receiver_id], 'message', ['message' => $message,'functionName'=>$request->input('functionName'),'user'=>\Auth::user()]);

        }
        return $message;
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


    public function markAsRead($message_id) {
        $message=Message::find($message_id);
        if(!count($message->myReads))
            return Message::find($message_id)->reads()->save(new Read(['user_id' => \Auth::user()->id]));
        return Message::find($message_id)->myReads;
    }
    public function getRecentMessages(){
        $messages= collect(\Auth::user()->messages()->with('receivers','myReads','sender')->get())->keyBy('sender_id');
      return  $messages->sortByDesc('id')->values()->all();
     }
    public function getUnreadMessageCount(){
       return count(collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id')->filter(function ($value, $key) {
            return ! count($value->myReads);
        }));
    }

    public function forwardMessage(Request $request)
    {
        $this->validate($request,[
            'users'=>'required',
        ]);
        //return($request->all());
        $messag_id = $request['messagId'];
        $oldMsg = Message::find($messag_id);
        $message = Message::create(['content'=>$oldMsg->content,'sender_id'=>\Auth::user()->id]);
        $users = $request['users'];
        foreach($users as $user)
        {
            User::find($user)->messages()->attach($message->id);
        }
        return "true";
        
    }
    
}
