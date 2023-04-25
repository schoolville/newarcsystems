<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    public $MailData;

    /**
     * Create a new message instance.
     */
    public function __construct($MailData)
    {
        $this->MailData = $MailData;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Contact Us',
        );
    }

    /**
     * Get the message content definition.
     */

     public function build()
    {
        return $this->subject('Contact Us')->view('mail.contactmail');
    }

    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'mail.contactmail'
    //         // with: [
    //         //     'senderName' => $this->message->name,
    //         //     'senderEmail' => $this->message->email,
    //         //     'message' => $this->message->message,
    //         // ],
    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
