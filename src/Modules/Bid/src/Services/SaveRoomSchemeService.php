<?php

declare(strict_types=1);

namespace Innovesta\Bid\Services;

interface SaveRoomSchemeService
{
    public function handle(string $bidId, array $files): void;
}
