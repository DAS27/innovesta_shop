<?php

declare(strict_types=1);

namespace Innovesta\Bid\Repositories;

use Innovesta\Bid\Dto\BidFileDto;
use Innovesta\Bid\Entities\BidFileEntity;

interface BidFileRepository
{
    public function store(BidFileDto $bidFileDto): BidFileEntity;

    public function getByBidId(string $bidId): ?array;
}
