<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

final class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (session()->has('locale')) {
            app()->setLocale(session('locale'));
        }

        app()->setLocale(config('app.locale'));
        Cookie::queue(Cookie::make(
            name: 'locale',
            value: config('app.locale'),
            minutes: 10080,
            httpOnly: false
        ));

        return $next($request);
    }

}
