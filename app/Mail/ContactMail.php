<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;

    public $name;

    public $phone;

    public $email;

    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(string $name, string $phone, string $email, string $message)
    {
        $this->subject = "Información de contacto";
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->content = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.contact');
    }
}
