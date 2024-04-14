<?php

declare(strict_types=1);

namespace Innovesta\Notification\UseCases;

use Innovesta\Bid\Dto\BidDto;

interface SendEmailBidUseCase
{
    public function handle(BidDto $bidDto): void;
}
