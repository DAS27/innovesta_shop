<?php

declare(strict_types=1);

namespace Innovesta\Notification\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Notification\UseCases\SendEmailBidUseCase;
use Innovesta\Notification\UseCases\Impl\SendEmailBidUseCaseImpl;

final class NotificationDIServiceProvider extends ServiceProvider
{
    public array $bindings = [
        // UseCases
        SendEmailBidUseCase::class => SendEmailBidUseCaseImpl::class,
    ];
}
