<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class WebsiteEnquiry extends Mailable
{
    public function __construct(
        public string $senderName,
        public string $senderEmail,
        public string $enquiryMessage,
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            replyTo: [new Address($this->senderEmail, $this->senderName)],
            subject: 'New Valourite website enquiry',
        );
    }

    public function content(): Content
    {
        return new Content(view: 'mail.website-enquiry', text: 'mail.website-enquiry-text');
    }
}
