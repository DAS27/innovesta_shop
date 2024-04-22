<?php

declare(strict_types=1);

namespace Innovesta\Locale\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Innovesta\Locale\Requests\EditRequest;
use Innovesta\Main\Controllers\AbstractController;

final class LocaleController extends AbstractController
{
    public function change(EditRequest $request): RedirectResponse
    {
        Session::put('locale', $request->get('locale'));

        return back();
    }
}
