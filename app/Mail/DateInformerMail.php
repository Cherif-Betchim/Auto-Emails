<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DateInformerMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    
    {
        $pause = true;
        if($pause == false){
            
            $ldate = date('Y-m-d H:i:s');
            return $this->markdown('emails.DateInformer',["todayDate"=>$ldate]);
        }
        
    }
}
