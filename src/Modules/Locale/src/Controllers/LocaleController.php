<?php

declare(strict_types=1);

namespace Innovesta\Locale\Controllers;

use Illuminate\Http\RedirectResponse;
use Innovesta\Locale\Requests\EditRequest;
use Innovesta\Main\Controllers\AbstractController;

final class LocaleController extends AbstractController
{
    public function change(EditRequest $request): RedirectResponse
    {
        session(['locale' => $request->get('locale')]);

        return redirect()->back();
    }
}
