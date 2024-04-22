<?php

declare(strict_types=1);

namespace Innovesta\Locale\Providers;

use Illuminate\Support\ServiceProvider;


final class LocaleServiceProvider extends ServiceProvider
{
    private const MIGRATIONS_PATH = 'databases/migrations';

    private const CONFIGS_PATH = 'configs';

    private const MODULE_PREFIX = 'locale';

    private const CONFIGS = [];

    public function boot(): void
    {
        $this->loadMigrations();
    }

    public function register(): void
    {
        $this->registerConfigs();
        $this->app->register(LocaleDIServiceProvider::class);
        $this->app->register(LocaleRouteServiceProvider::class);
    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom($this->modulePath(self::MIGRATIONS_PATH));
    }

    private function modulePath(string $path): string
    {
        return base_path("src/Modules/Locale/$path");
    }

    private function registerConfigs(): void
    {
        $modulePath = $this->modulePath(self::CONFIGS_PATH);
        foreach (self::CONFIGS as $config) {
            $this->mergeConfigFrom(
                "{$modulePath}/{$config}.php",
                self::MODULE_PREFIX . ".{$config}"
            );
        }
    }
}
