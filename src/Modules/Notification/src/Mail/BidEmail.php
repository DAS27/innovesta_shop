<?php

declare(strict_types=1);

namespace Innovesta\Notification\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Innovesta\Bid\Dto\BidDto;

final class BidEmail extends Mailable
{
    use Queueable;

    public function __construct(
        private readonly BidDto $bidDto
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Новая заявка',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-bid',
            with: [
                'first_name' => $this->bidDto->first_name,
                'phone' => $this->bidDto->phone,
            ],
        );
    }
}
