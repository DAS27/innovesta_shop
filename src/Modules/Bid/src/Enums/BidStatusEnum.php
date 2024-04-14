<?php

declare(strict_types=1);

namespace Innovesta\Bid\Enums;

enum BidStatusEnum: string
{
    case NEW = 'new';
    case IN_PROGRESS = 'in progress';
    case APPROVED = 'approved';
    case AWAITING_RESPONSE = 'awaiting response';
    case CANCELED = 'canceled';
    case DONE = 'done';
}
