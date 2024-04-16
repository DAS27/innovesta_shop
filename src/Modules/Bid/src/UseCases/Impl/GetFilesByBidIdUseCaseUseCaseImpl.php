<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases\Impl;

use Innovesta\Bid\Services\GetFilesByIdService;
use Innovesta\Bid\UseCases\GetFilesByBidIdUseCase;

final readonly class GetFilesByBidIdUseCaseUseCaseImpl implements GetFilesByBidIdUseCase
{
    public function __construct(
        private GetFilesByIdService $getFilesByIdService
    ) {}

    public function handle(string $bidId): array
    {
        return $this->getFilesByIdService->handle($bidId);
    }
}
