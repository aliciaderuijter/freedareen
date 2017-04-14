<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ThankYou extends Mailable
{
    use Queueable, SerializesModels;

  public $name;


    public function __construct($name)
    {
        $this->name=$name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        return $this->from('freedareentartour@gmail.com', 'Free Dareen Tatour')
                    ->view('mail.thankYou');
    }
}
