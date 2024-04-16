<?php

declare(strict_types=1);

namespace Innovesta\Bid\Dto;

use Spatie\LaravelData\Data;

final class BidFileDto extends Data
{
    public function __construct(
        public string $name,
        public string $bid_id,
        public string $path,
        public string $mime_type,
        public int $size
    ) {}
}
