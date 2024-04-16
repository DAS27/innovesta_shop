<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases\Impl;

use Innovesta\Bid\Entities\BidFileEntity;
use Innovesta\Bid\Services\SaveRoomSchemeService;
use Innovesta\Bid\UseCases\SaveRoomSchemeUseCase;

final readonly class SaveRoomSchemeUseCaseImpl implements SaveRoomSchemeUseCase
{
    public function __construct(
        private SaveRoomSchemeService $saveRoomSchemeService
    ) {}

    public function handle(string $bidId, array $files): void
    {
        $this->saveRoomSchemeService->handle($bidId, $files);
    }
}
