<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/MainController/renderUserList">Посмотреть список зарегистрированных пользователей</a><br>
<form action="/MainController/Registered" method="POST">
    Регистрация:
    Имя пользователя: <input type="text" name="username" value="">
    Пароль: <input type="password" name="password" value="">
    <input type="submit">
</form><br>

<form action="/MainController/authentification" method="POST">
    Авторизация:
    Имя пользователя: <input type="text" name="username" value="">
    Пароль: <input type="password" name="password" value="">
    <input type="submit">
</form><br>

</body>
</html>