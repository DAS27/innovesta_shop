<?php

declare(strict_types=1);

namespace Innovesta\Core\Database\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Core\Database\Contracts\TransactionInterface;
use Innovesta\Core\Database\IlluminateTransaction;

class DatabaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(
            TransactionInterface::class,
            IlluminateTransaction::class
        );
    }

    public function provides(): array
    {
        return [
            TransactionInterface::class,
        ];
    }
}
