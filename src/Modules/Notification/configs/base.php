<?php

declare(strict_types=1);

return [
    'send_to_email' => env('MAIL_FROM_ADDRESS', 'info@innovesta.kz'),
    'queue_name' => 'send_bid',
];
