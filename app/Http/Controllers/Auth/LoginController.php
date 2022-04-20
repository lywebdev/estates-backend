<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::attempt([
            'email'    => $request->email,
            'password' => $request->password
        ])) {
            // Success auth
            if (Auth::user()->isAdmin()) {
                return redirect()->route('admin.home');
            }

            return redirect()->intended(route('home'));
        }

        return redirect()->intended(route('login'));
    }
}
