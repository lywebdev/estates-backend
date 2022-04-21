<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
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
        $user = User::create($request->validated());
        if ($user) {
            Auth::login($user);
//            event(new Registered($user));

            return redirect()->route('home');
        }


        return redirect()->back()->withErrors([
            'registerError' => 'Произошла ошибка при регистрации пользователя'
        ]);
    }
}
