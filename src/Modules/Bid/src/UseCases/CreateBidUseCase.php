<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Entities\BidEntity;

interface CreateBidUseCase
{
    public function handle(BidDto $bidDto): BidEntity;
}
