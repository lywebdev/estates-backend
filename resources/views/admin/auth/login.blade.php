<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход | Bugachiev</title>

    <link rel="stylesheet" href="{{ asset('css/admin/customize.css') }}">
</head>
<body>

</body>
</html>
<div class="auth-form">
    <div class="auth-form__title">Авторизация</div>
    <form action="{{ route('admin.login') }}" method="post">
        @csrf
        <div class="form-input">
            <input class="input" type="text" name="login" placeholder="Логин">
            @error('login')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-input">
            <input class="input" type="password" name="password" placeholder="Пароль">
            @error('password')
            <span class="auth-form__error">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn submit">Войти</button>
    </form>
</div>



