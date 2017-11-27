<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $nom;
    public $eMail;
    public $sujet;
    public $contenu;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nom, $eMail, $sujet, $contenu)
    {
        $this->nom = $nom;
        $this->eMail = $eMail;
        $this->sujet = $sujet;
        $this->contenu = $contenu;
    }

    // public function __toString()
    // {
    //    return $this->msg. '';
    // }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.messages.mail');
    }
}
