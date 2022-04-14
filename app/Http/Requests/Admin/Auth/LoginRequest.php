<?php

namespace App\Http\Requests\Admin\Auth;

use App\Rules\Auth\ValidatePasswordRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LoginRequest extends FormRequest
{
    public function authorize(Request $request)
    {
        $this->login = $request->login;
        $this->password = $request->password;

        return true;
    }

    public function messages()
    {
        return [
            'login.required' => 'Введите логин',
            'login.string' => 'Указанный логин не является строкой',
            'login.max' => 'Длина логина недопустимая',
            'login.exists' => 'Пользователя с таким логином не существует',

            'password.failed' => 'Некорректный пароль',
            'password.min' => 'Минимальная длина пароля 3 символа',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|string|max:255|exists:admin_users',
            'password' => ['required', 'string', 'min:3', new ValidatePasswordRule([
                'login' => $this->login,
                'password' => $this->password,
            ])],
        ];
    }
}
