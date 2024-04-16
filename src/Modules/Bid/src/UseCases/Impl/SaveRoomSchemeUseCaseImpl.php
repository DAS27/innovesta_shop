<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases\Impl;

use Symfony\Component\HttpFoundation\File\File;
use Innovesta\Bid\Services\SaveRoomSchemeService;
use Innovesta\Bid\UseCases\SaveRoomSchemeUseCase;

final readonly class SaveRoomSchemeUseCaseImpl implements SaveRoomSchemeUseCase
{
    public function __construct(
        private SaveRoomSchemeService $saveRoomSchemeService
    ) {}

    public function handle(File $file): string
    {
        $this->saveRoomSchemeService->handle($file);
    }
}
