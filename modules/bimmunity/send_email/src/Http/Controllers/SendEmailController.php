<?php

namespace Bimmunity\SendEmail\Http\Controllers;
use App\Http\Controllers\AppBaseController;
use Bimmunity\Ticketing\Models\TicketAction;
use Bimmunity\Ticketing\Models\Actionable;
use Bimmunity\Ticketing\Models\TicketActionStatues;
use Illuminate\Http\Request;
use App\Models\File;
use App\Mail\SendMail;
class SendEmailController extends AppBaseController
{
    //
    public function create()
    {
        // if(\Auth::user()->getParent(\Auth::user()->perent_id) != null)
        // {
            
        //     $team = \Auth::user()->getTeam(\Auth::user()->perent_id);
        // }
        // else
        // {
        //     $team = \Auth::user()->getTeam(\Auth::user()->id);
        // }
        $team = \App\User::all();
        return view('send_email::send_mail',compact('team'));

    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'to'=>'required',
            'subject'=>'required',
            'content'=>'required'
        ]);
        // foreach ($request['to'] as $to) {
        //     \Mail::to($to)->cc($request['cc'])->send(new SendMail(\Auth::user()->name,$request['content'],\Auth::user()->email,$request['cc'],$request['subject']));
        // }
        if(!isset($request['ticket_id'])){
           
            return back();
        }
       else
       {
           TicketActionStatues::create(['ticket_action_id'=>$request['action_id'],'ticket_id'=>$request['ticket_id'],'status'=>1]);
           return redirect('/tickets/'.$request['ticket_id']);
       }
        
        
       
    }
}
