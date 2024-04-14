<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases;

use Innovesta\Bid\Dto\BidDto;

interface CreateBidUseCase
{
    public function handle(BidDto $bidDto): void;
}
