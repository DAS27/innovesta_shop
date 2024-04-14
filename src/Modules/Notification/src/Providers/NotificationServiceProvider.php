<?php

declare(strict_types=1);

namespace Innovesta\Notification\Providers;

use Illuminate\Support\ServiceProvider;

final class NotificationServiceProvider extends ServiceProvider
{
    private const MIGRATIONS_PATH = 'database/migrations';

    private const CONFIGS_PATH = 'configs';

    private const MODULE_PREFIX = 'notification';

    private const CONFIGS = [
        'base',
    ];

    public function boot(): void
    {
        $this->loadMigrations();
    }

    public function register(): void
    {
        $this->registerConfigs();
        $this->app->register(NotificationDIServiceProvider::class);
    }

    private function loadMigrations(): void
    {
        $this->loadMigrationsFrom($this->modulePath(self::MIGRATIONS_PATH));
    }

    private function modulePath(string $path): string
    {
        return sprintf('%s/../../%s', __DIR__, $path);
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
