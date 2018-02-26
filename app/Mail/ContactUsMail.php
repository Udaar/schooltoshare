<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;


class ContactUsMail extends Mailable
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
    public function __construct($name,$message,$email)
    {
        //return Route::current()->parameters();
        $this->name=$name;
        $this->message= $message;
        $this->email=$email;
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
        return $this->from('bimmunity.udaar@gmail.com','Udaar')->view('mail',compact('data'));
    }
}
