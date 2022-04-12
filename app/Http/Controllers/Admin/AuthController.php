<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $authData = $request->validate([
            'login' => ['required', 'string', 'exists:admin_users'],
            'password' => ['required']
        ]);

        if (!auth('admin')->attempt($authData)) {
            return redirect()->route('admin.loginForm')->withErrors(['email' => 'Указаны неверные данные для входа']);
        }


        return redirect()->route('admin.home')->with('success', 'Добро пожаловать');
    }
}
