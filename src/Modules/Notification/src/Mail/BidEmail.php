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
                'last_name' => $this->bidDto->last_name,
                'email' => $this->bidDto->email,
                'phone' => $this->bidDto->phone,
                'contact_method' => $this->bidDto->contact_method,
                'room_type' => $this->bidDto->room_type,
                'room_dimensions' => $this->bidDto->room_dimensions,
                'comment' => $this->bidDto->comment,
            ],
        );
    }
}
