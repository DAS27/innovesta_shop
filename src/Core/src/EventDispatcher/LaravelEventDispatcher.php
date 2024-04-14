<?php

declare(strict_types=1);

namespace Innovesta\Core\EventDispatcher;

use Illuminate\Contracts\Events\Dispatcher;

final class LaravelEventDispatcher implements EventDispatcherInterface
{
    public function dispatch(BaseEvent $event): void
    {
        event($event);
    }
}
