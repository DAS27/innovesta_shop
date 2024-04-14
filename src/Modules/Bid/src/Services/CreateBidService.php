<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Entities\BidEntity;

interface CreateBidService
{
    public function handle(BidDto $bidDto): BidEntity;
}
