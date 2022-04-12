<form action="{{ route('admin.login') }}" method="post">
    @csrf

    <input type="text" name="login" placeholder="Логин">
    <input type="password" name="password" placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
