<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases\Impl;

use Innovesta\Bid\Dto\BidDto;
use Innovesta\Bid\Entities\BidEntity;
use Innovesta\Bid\Services\CreateBidService;
use Innovesta\Bid\UseCases\CreateBidUseCase;

final readonly class CreateBidUseCaseImpl implements CreateBidUseCase
{
    public function __construct(
        private CreateBidService $createBidService
    ) {}

    public function handle(BidDto $bidDto): BidEntity
    {
        return $this->createBidService->handle($bidDto);
    }
}
