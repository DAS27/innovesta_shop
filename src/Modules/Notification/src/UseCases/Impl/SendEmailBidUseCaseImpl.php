<?php

declare(strict_types=1);

namespace Innovesta\Notification\UseCases\Impl;

use Illuminate\Support\Facades\Mail;
use Innovesta\Notification\UseCases\SendEmailBidUseCase;
use Innovesta\Bid\Dto\BidDto;
use Innovesta\Notification\Mail\BidEmail;

final class SendEmailBidUseCaseImpl implements SendEmailBidUseCase
{

    public function handle(BidDto $bidDto): void
    {
        Mail::to(config('notification.base.send_to_email'))->send(new BidEmail($bidDto));
    }
}
