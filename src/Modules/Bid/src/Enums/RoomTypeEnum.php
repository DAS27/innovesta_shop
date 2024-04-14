<?php

declare(strict_types=1);

namespace Innovesta\Bid\Enums;

enum RoomTypeEnum: string
{
    case MALL = 'mall';
    case BUSINESS_CENTER = 'business_center';
    case HOTEL = 'hotel';
    case RESTAURANT = 'restaurant';
    case COWORKING_SPACE = 'coworking_space';
    case GAMING_CLUB = 'gaming_club';
}
