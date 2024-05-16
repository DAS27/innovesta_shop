<?php

declare(strict_types=1);

namespace Innovesta\Bid\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Innovesta\Bid\Enums\BidStatusEnum;
use Innovesta\Bid\Enums\RoomTypeEnum;

final class BidCreateRequests extends FormRequest
{
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'required'],
            'last_name' => ['string', 'nullable'],
            'email' => ['email', 'nullable'],
            'phone' => ['required', 'regex:/^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}$/'],
            'contact_method' => ['required', Rule::in(['email', 'phone', 'both'])],
            'room_type' => ['required', Rule::in(RoomTypeEnum::cases())],
            'room_dimensions' => ['integer', 'nullable'],
            'comments' => ['string', 'nullable'],
            'sku' => ['string', 'nullable'],
            'files' => ['array', 'nullable'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => BidStatusEnum::NEW->value,
        ]);
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'phone.regex' => 'Неверный формат телефона! Пример: +7(999)999-99-99',
        ];
    }
}
