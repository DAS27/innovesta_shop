<?php

declare(strict_types=1);

namespace Innovesta\Bid\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class BidRouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->map();
    }

    public function map(): void
    {
        $this->mapWebRoutes();
    }

    private function mapWebRoutes(): void
    {
        Route::prefix('bid')
            ->name('bid.')
            ->namespace('Innovesta\Bid\Controllers')
            ->group(dirname(__DIR__, 2) . '/routes/web.php');
    }
}
