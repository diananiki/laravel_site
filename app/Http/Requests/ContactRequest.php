<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Введите имя',
            'email.required' => 'Введите почту',
            'email.email' => 'Некорректная почта',
            'subject.required' => 'Введите тему'
        ];
    }
}
