<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => view('app'));
Route::get('/mall', static fn () => view('partials.products.mall'));
Route::get('/business-center', static fn () => view('partials.products.business-center'));
Route::get('/hotel', static fn () => view('partials.products.hotel'));
Route::get('/restaurant', static fn () => view('partials.products.restaurant'));
Route::get('/coworking', static fn () => view('partials.products.coworking'));
Route::get('/gaming-club', static fn () => view('partials.products.gaming-club'));
