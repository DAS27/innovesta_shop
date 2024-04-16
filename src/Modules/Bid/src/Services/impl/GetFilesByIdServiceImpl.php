<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services\impl;

use Innovesta\Bid\Repositories\BidFileRepository;
use Innovesta\Bid\Services\GetFilesByIdService;

final readonly class GetFilesByIdServiceImpl implements GetFilesByIdService
{
    public function __construct(
        private BidFileRepository $bidFileRepository
    ) {}

    public function handle(string $bidId): array
    {
        return $this->bidFileRepository->getByBidId($bidId);
    }
}
