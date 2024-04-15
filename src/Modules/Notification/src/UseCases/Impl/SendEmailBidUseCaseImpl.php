<?php

declare(strict_types=1);

namespace Innovesta\Notification\UseCases\Impl;

use Illuminate\Support\Facades\Mail;
use Innovesta\Bid\Entities\BidEntity;
use Innovesta\Notification\Mail\BidEmail;
use Innovesta\Notification\UseCases\SendEmailBidUseCase;

final class SendEmailBidUseCaseImpl implements SendEmailBidUseCase
{
    public function handle(BidEntity $bidEntity): void
    {
        Mail::to(config("notification.base.send_to_email"))
            ->cc(["info@innovesta.kz", "dkilkeev@gmail.com"])
            ->send(new BidEmail($bidEntity));
    }
}
