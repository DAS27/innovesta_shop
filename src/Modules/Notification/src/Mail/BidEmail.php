<?php

declare(strict_types=1);

namespace Innovesta\Notification\Mail;

use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Innovesta\Bid\Entities\BidEntity;

final class BidEmail extends Mailable
{
    use Queueable;

    public function __construct(
        private readonly BidEntity $bidEntity
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(subject: "Новая заявка");
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.new-bid',
            with: [
                "created_at" => Carbon::parse(
                    $this->bidEntity->created_at
                )->timezone("Asia/Almaty"),
                "first_name" => $this->bidEntity->first_name,
                "last_name" => $this->bidEntity->last_name,
                "email" => $this->bidEntity->email,
                "phone" => $this->bidEntity->phone,
                "contact_method" => $this->bidEntity->contact_method,
                "room_type" => $this->bidEntity->room_type,
                "room_dimensions" => $this->bidEntity->room_dimensions,
                "sku" => $this->bidEntity->sku,
                "comment" => $this->bidEntity->comment,
            ]
        );
    }
}
