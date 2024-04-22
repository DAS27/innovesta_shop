<?php

declare(strict_types=1);

namespace Innovesta\Locale\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

final class LocaleRouteServiceProvider extends ServiceProvider
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
        Route::prefix('locale')
            ->name('locale.')
            ->namespace('Innovesta\Locale\Controllers')
            ->group(dirname(__DIR__, 2) . '/routes/web.php');
    }
}
