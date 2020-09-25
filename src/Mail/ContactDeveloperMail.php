<?php

namespace GabrielFemi\Contact\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactDeveloperMail extends Mailable
{
    use Queueable, SerializesModels;

    private $message;
    private $email;
    private $name;

    /**
     * Create a new message instance.
     *
     * @param $message
     * @param $name
     */
    public function __construct($message, $name)
    {
        $this->message = $message;
        $this->name = $name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('contact::emails.contact-developer')->with(['message' => $this->message, 'name' => $this->name]);
    }
}
