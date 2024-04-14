<?php

declare(strict_types=1);

namespace Innovesta\Bid\Dto;

use Innovesta\Bid\Enums\BidStatusEnum;
use Innovesta\Bid\Enums\RoomTypeEnum;
use Spatie\LaravelData\Data;

final class BidDto extends Data
{
    public function __construct(
        public ?string $id,
        public string $first_name,
        public ?string $last_name,
        public ?string $email,
        public string $phone,
        public string $contact_method,
        public BidStatusEnum $status,
        public RoomTypeEnum $room_type,
        public ?int $room_dimensions = null,
        public ?string $comment = null,
        public ?string $sku = null,
        public ?string $room_scheme = null,
    ) {
    }
}
