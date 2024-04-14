<?php

declare(strict_types=1);

namespace Innovesta\Core\EventDispatcher\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Core\EventDispatcher\EventDispatcherInterface;
use Innovesta\Core\EventDispatcher\LaravelEventDispatcher;

final class EventDispatcherServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(EventDispatcherInterface::class, LaravelEventDispatcher::class);
    }
}
