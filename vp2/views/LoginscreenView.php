<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/MainController/renderAdminPanel">Панель администратора</a><br>
<br>
<a href="/UploadFileController/renderUserList">Посмотреть список зарегистрированных пользователей</a><br>
<br>
<br>
<form action="/MainController/Registered" method="POST">
    Регистрация:<br>
    Имя пользователя: <input type="text" name="username" value=""><br>
    Пароль: <input type="password" name="password" value=""><br>
    <input type="submit">
</form><br>
<br>
<form action="/MainController/authentification" method="POST">
    Авторизация:<br>
    Имя пользователя: <input type="text" name="username" value=""><br>
    Пароль: <input type="password" name="password" value=""><br>
    <input type="submit"><br>
</form><br>

</body>
</html>