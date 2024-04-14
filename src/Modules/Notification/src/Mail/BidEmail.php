<?php

declare(strict_types=1);

namespace Innovesta\Notification\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Innovesta\Bid\Dto\BidDto;

final class BidEmail extends Mailable
{
    use Queueable;

    public function __construct(
        private readonly BidDto $bidDto
    ) {}

    public function build(): self
    {
        /*
         return $this->markdown('emails.send-email-verification-code', [
            'code' => $this->code
        ])->subject(config('base.mail.subject.verification_code'));
        */

        return $this->view('mail.bid', [
            'bid' => $this->bidDto,
        ]);
    }
}
