<?php

declare(strict_types=1);

namespace Innovesta\Bid\UseCases;

use Innovesta\Bid\Entities\BidFileEntity;

interface SaveRoomSchemeUseCase
{
    public function handle(string $bidId, array $files): void;
}
