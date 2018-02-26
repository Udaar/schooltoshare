<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Message;
use App\User;
use App\Read;
use App\ChatGroup;

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
            $conversations=collect(ChatGroup::find($receiver_id)->messages);
        }
        else{
            $receives=collect(\Auth::user()->messages()->where('sender_id',$receiver_id)->get());
            $sends=collect(User::find($receiver_id)->messages()->where('sender_id',\Auth::user()->id)->get());
            if($receiver_id==\Auth::user()->id){
                $conversations=$receives->sortBy('id');
            }
            else {
                $conversations=$receives->merge($sends)->sortBy('id');
            }
        }
        if($receives->last())
        $this->markAsRead($receives->last()->id);
        //\Auth::user()->messages()->attach(Message::create(['content'=>'hello','sender_id'=>1]));
        return vieW('messages.conversation',compact('conversations'));
     // return \Auth::user()->messages()->where('sender_id',$reseiver_id)->get();
    }

    public function getRecent()
    {
        // return $receives=collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id');

        // return $receives->filter(function ($value, $key) {
        //                 return count($value->myReads);
        //             });
        
        return vieW('messages.recent');


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
                 $receiver_ids[]=$receiver->id;
             }
            event(new \App\Events\MessageEvent($message, $receiver_ids));
        }else{
            User::find($receiver_id)->messages()->attach($message);
            event(new \App\Events\MessageEvent($message,['ifm'.$receiver_id]));
        }
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
}
