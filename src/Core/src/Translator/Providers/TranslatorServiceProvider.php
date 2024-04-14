<?php

declare(strict_types=1);

namespace Innovesta\Core\Translator\Providers;

use Illuminate\Support\ServiceProvider;
use Innovesta\Core\Translator\LaravelTranslator;
use Innovesta\Core\Translator\TranslatorInterface;

final class TranslatorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TranslatorInterface::class, LaravelTranslator::class);
    }

    public function provides(): array
    {
        return [
            TranslatorInterface::class,
        ];
    }
}
