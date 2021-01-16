<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MessageFromContactForm extends Mailable
{
    use Queueable, SerializesModels;
    public $subject = 'Mail from Contact Form';
    public $content = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->content =$content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->replyTo($this->content['email'],$this->content['name']);
        return $this->view('faq');
    }
}
