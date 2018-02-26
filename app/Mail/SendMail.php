<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public $message;
     public $name; 
     public $email;
     public $toccemails;
     public $subject;
    public function __construct($name,$message,$email,$toccemails,$subject)
    {
        //return Route::current()->parameters();
        $this->name=$name;
        $this->message= $message;
        $this->email=$email;
        $this->toccemails=$toccemails;
        $this->subject=$subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = array();
        $data[0] = $this->name;
        $data[1] = $this->email;
        $data[2]= $this->message;
        $data[3]=$this->toccemails;
        $data[4]=$this->subject;
        return $this->from(\Auth::user()->email,\Auth::user()->name)->view('send_email::mail',compact('data'));
    }
}
