<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация | Bugachiev</title>

    <link rel="stylesheet" href="{{ asset('css/admin/customize.css') }}">
</head>
<body>

</body>
</html>
<div class="auth-form">
    <div class="auth-form__title">Регистрация</div>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="form-input">
            <input class="input" type="text" name="name" placeholder="Ваше имя">
            @error('name')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input">
            <input class="input" type="text" name="email" placeholder="Email">
            @error('email')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input">
            <input class="input" type="password" name="password" placeholder="Пароль">
            @error('password')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input">
            <input type="password" class="input" placeholder="Подтвердите пароль" name="password_confirmation">
            @error('password_confirmation')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <label for="agreement">
            <input type="checkbox" name="agreement" id="agreement">
            Я согласен с политикой обработки персональных данных
        </label>
        <button type="submit" class="btn submit">Создать аккаунт</button>
        <div class="auth-form__redirect-btn"><a href="{{ route('loginForm') }}">Авторизоваться</a></div>
    </form>
</div>
