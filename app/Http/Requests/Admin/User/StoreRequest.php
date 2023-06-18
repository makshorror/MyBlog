<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'role_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле пустое',
            'name.string' => 'Поле должно быть строкой',
            'email.required' => 'Поле пустое',
            'email.string' => 'Поле должно быть строкой',
            'email.email' => 'Почта должна соответствовать формату mail@some.domain',
            'email.unique' => 'Пользователь с таким email же существует',
        ];
    }
}
