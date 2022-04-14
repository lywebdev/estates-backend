<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function messages()
    {
        return [
            'email.required' => 'Введите адрес электронной почты',
            'email.string' => 'Email не является строкой',
            'email.email' => 'Введён некорректный email адрес',
            'email.max' => 'Длина email некорркетная',
            'email.exists' => 'Пользователя с таким email\'ом не существует',

            'password.failed' => 'Некорректный пароль',
            'password.min' => 'Минимальная длина пароля 3 символа',
        ];
    }

    public function login(LoginRequest $request)
    {
        if (auth('admin')->attempt([
            'login' => $request->login,
            'password' => $request->password
        ])) {
            // Success auth
            return redirect()->intended(route('admin.home'));
        }

        return redirect()->intended(route('admin.login'));
    }
}
