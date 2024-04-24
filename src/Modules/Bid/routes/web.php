<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Innovesta\Bid\Controllers\BidController;

Route::controller(BidController::class)->group(function () {
    Route::get('/', 'index')->name('index')->middleware('web');
    Route::post('/', 'store')->name('store');
});
