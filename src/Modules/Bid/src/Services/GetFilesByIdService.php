<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services;

interface GetFilesByIdService
{
    public function handle(string $bidId): array;
}
