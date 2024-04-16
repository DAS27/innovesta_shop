<?php

declare(strict_types=1);

namespace Innovesta\Notification\UseCases;

use Innovesta\Bid\Entities\BidEntity;

interface SendEmailBidUseCase
{
    public function handle(BidEntity $bidEntity, array $roomSchemePaths): void;
}
