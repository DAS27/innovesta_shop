<?php

declare(strict_types=1);

namespace Innovesta\Bid\Repositories;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Entities\BidEntity;

interface BidRepository
{
    public function store(BidDto $bidDto): BidEntity;
}
