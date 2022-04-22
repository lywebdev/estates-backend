<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function registerForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        if ($user) {
            event(new Registered($user));
            Auth::login($user);

            return redirect()->route('verification.notice');
        }


        return redirect()->back()->withErrors([
            'registerError' => 'Произошла ошибка при регистрации пользователя'
        ]);
    }
}
