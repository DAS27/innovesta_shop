<?php

declare(strict_types=1);

namespace Innovesta\Locale\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cookie;
use Innovesta\Locale\Requests\EditRequest;
use Innovesta\Main\Controllers\AbstractController;

final class LocaleController extends AbstractController
{
    public function change(EditRequest $request): RedirectResponse
    {
        $locale = $request->get('locale');

        Cookie::queue(Cookie::make(
            name: 'locale',
            value: $locale,
            minutes: 10080,
            httpOnly: false
        ));

        return redirect()->back();
    }
}
