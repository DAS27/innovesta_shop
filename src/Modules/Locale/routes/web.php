<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Innovesta\Locale\Controllers\LocaleController;

Route::post('change-locale', [LocaleController::class, 'change'])
    ->name('change')
    ->middleware('web');
