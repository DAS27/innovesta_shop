<?php

declare(strict_types=1);

namespace Innovesta\Locale\Requests;

use Illuminate\Foundation\Http\FormRequest;

final class EditRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'locale' => ['required', 'string', 'in:kz,ru,en'],
        ];
    }
}
