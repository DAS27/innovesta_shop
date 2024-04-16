<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases;

interface GetFilesByBidIdUseCase
{
    public function handle(string $bidId): array;
}
