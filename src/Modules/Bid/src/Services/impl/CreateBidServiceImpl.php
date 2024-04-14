<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services\impl;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Repositories\BidRepository;
use Innovesta\Bid\Services\CreateBidService;

final readonly class CreateBidServiceImpl implements CreateBidService
{
    public function __construct(
        private BidRepository $bidRepository
    ) {}

    public function handle(BidDto $bidDto): void
    {
        $this->bidRepository->store($bidDto);
    }
}
