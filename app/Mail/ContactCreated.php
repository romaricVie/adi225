<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Contact;
class ContactCreated extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    public $email;
    public $tel;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $email, $tel, $message)
    {
        //
        $this-> nom = $nom;
        $this-> email = $email;
        $this-> tel = $tel;
        $this-> message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return  $this->from($this->email)  // l'expediteur
                     ->subject("Nouveau message")
                     ->markdown('emails.messages.contacts');
    }
}
