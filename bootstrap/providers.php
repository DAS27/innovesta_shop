<?php

return [
    App\Providers\AppServiceProvider::class,

    //Core
    \Innovesta\Core\JobDispatcher\Providers\JobDispatcherServiceProvider::class,
    \Innovesta\Core\EventDispatcher\Providers\EventDispatcherServiceProvider::class,

    //Modules
    \Innovesta\Bid\Providers\BidServiceProvider::class,
    \Innovesta\Notification\Providers\NotificationServiceProvider::class,
];
