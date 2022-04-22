<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Верификация | Bugachiev</title>

    <link rel="stylesheet" href="{{ asset('css/admin/customize.css') }}">
</head>
<body>

</body>
</html>
<div class="auth-form">
    <div class="auth-form__title">Верификация</div>

    @if (session('resent'))
        <p>Отправили сообщение для подтверждения почты повторно</p>
    @else
        <p>Вам на почту отправлено письмо для верификации почтового адреса. Перейдите по ссылке, чтобы активировать аккаунт</p>
    @endif

    <form action="{{ route('verification.resend') }}" method="post">
        @csrf
        <button type="submit" class="btn submit">Отправить повторно</button>

        <div class="auth-form__redirect-btn"><a href="{{ route('home') }}">Главная</a></div>
    </form>
</div>
