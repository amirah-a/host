<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class AccessCodeMail extends Mailable
{
    use Queueable;

    public function __construct(
        public string $name,
        public string $code
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Your Secure Dashboard Access Code',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.access-code',
        );
    }
}
