<?php

declare(strict_types=1);

namespace Innovesta\Bid\Models;

use Innovesta\Bid\Enums\BidStatusEnum;
use Innovesta\Bid\Enums\RoomTypeEnum;
use Innovesta\Main\Models\AbstractStringableModel;

/**
 * @property string $id
 * @property string $first_name
 * @property ?string $last_name
 * @property ?string $email
 * @property string $phone
 * @property string $contact_method
 * @property RoomTypeEnum $room_type
 * @property ?int $room_dimensions
 * @property ?string $room_scheme
 * @property ?string $comment
 * @property ?string $sku
 * @property BidStatusEnum $status
 */
final class BidModel extends AbstractStringableModel
{
    protected $table = 'bids';

    protected $casts = [
        'status' => BidStatusEnum::class,
        'room_type' => RoomTypeEnum::class,
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'contact_method',
        'room_type',
        'room_dimensions',
        'room_scheme',
        'comment',
        'sku',
        'status',
    ];
}
