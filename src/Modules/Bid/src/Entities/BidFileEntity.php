<?php

declare(strict_types=1);

namespace Innovesta\Bid\Entities;

use Spatie\LaravelData\Data;

final class BidFileEntity extends Data
{
    public function __construct(
        public string $name,
        public string $bid_id,
        public string $path,
        public string $mime_type,
        public int $size
    ) {}
}
