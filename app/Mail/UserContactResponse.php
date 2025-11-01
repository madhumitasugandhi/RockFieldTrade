<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserContactResponse extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->subject('We Will Get in Touch Soon')
                    ->view('emails.user-response');
    }
}