<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

final class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (Session::has('locale')) {
            dd(Session::get('locale'));
            App::setLocale(Session::get('locale'));
        } else {
            App::setLocale('kz');  // Установка языка по умолчанию, если в сессии нет locale
        }

        return $next($request);
    }

}
