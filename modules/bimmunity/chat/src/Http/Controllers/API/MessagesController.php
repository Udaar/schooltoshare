<?php

namespace Bimmunity\Chat\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Bimmunity\Chat\Models\Message;
use App\User;
use Bimmunity\Chat\Models\Read;
use Bimmunity\Chat\Models\ChatGroup;
use Vinkla\Pusher\Facades\Pusher;
use File;
use App\Repositories\FileRepository;


class MessagesController extends Controller
{
    private $fileRepository;
    
    public function __construct(FileRepository $fileRepo)
    {
        $this->fileRepository = $fileRepo;
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
        return str_replace('\\', '/',url('/')).$saved_Path;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /*
    *Send Message
    */
    public function sendMessage(Request $request)
    {

        /*
        * Validation which returns the error messages
        *
        */
        $validation = Validator::make($request->all(),[ 
            'content' => 'required',
            'receiver_id' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }

        $_POST = $request->all();
        /*
        *This part to check if there is file and type in the request
        */
        if($request['file'])
            $file = $_POST['file'];
        else
            $file = "";
        if($request['type'])
            $type = $_POST['type'];
        else
            $type = "";

    
        $receiver_id = $_POST['receiver_id'];
        
        
        if($file == "")
        {
            $message=Message::create(['content'=>$request->input('content'),'sender_id'=>\Auth::user()->id]);
        }
        else
        {
            $content =  $request->input('content')." ". $this->attachFile($request->input('file'),$request['name']);
            $message=Message::create(['content'=>$content,'sender_id'=>\Auth::user()->id]);
        }
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
        return response()->json(['message'=>$message],200);
        // return $message;
    }

    /**
     * Get The Conversations
     */
    public function getConversations(Request $request)
    {
        $validation = Validator::make($request->all(),[ 
            'receiver_id' => 'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        /**
         * Prepare Data
         */
        $_GET = $request->all();
        if($request['type'])
            $type = $_GET['type'];
        else
            $type = "";
        /**
         * Code Begin
         */
        $receiver_id = $_GET['receiver_id'];
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
            
        return response()->json(['conversations'=>$conversations],200);
    }

    /**
     * forward Message
     */
    public function forwardMessage(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'users'=>'required',
            'messageId'=>'required',
        ]);
        if($validation->fails())
        {
            $errors = $validation->errors();
            
            return $errors->toJson();
        }
        //return($request->all());
        $_POST = $request->all();
        $messag_id = $_POST['messageId'];
        $oldMsg = Message::find($messag_id);
        $message = Message::create(['content'=>$oldMsg->content,'sender_id'=>\Auth::user()->id]);
        $users = json_decode($_POST['users']);
        foreach($users as $user)
        {
            User::find($user)->messages()->attach($message->id);
        }
        return response()->json(['Result'=>"true"],200);
        
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
   
    public function getRecent()
    {
        // return $receives=collect(\Auth::user()->messages()->with('receivers','myReads')->get())->keyBy('sender_id');

        // return $receives->filter(function ($value, $key) {
        //                 return count($value->myReads);
        //             });
        
        return vieW('chat::messages.recent');


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

    

   
    
}
