<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<b>Панель администратора</b><br>
<a href="/">Вернуться к начальной странице</a><br>
<form action="/MainController/renderAdminPanel" method="post">
    <button name="sort" value="1" type="submit">По возрастанию</button>
    <button name="sort" value="2" type="submit">По убыванию</button>
</form>

<br>
<?foreach ($r as $value) {
    echo " Имя: " . $value['name'] . " Пароль: " . $value['password'] . " Возраст: ";
    echo $value['age'] . "(" . $value['sov'] . ")<br>";
}?>
<br>
----------------------------------------------------<br>
Создать пользователя:<br>
----------------------------------------------------<br>
<form action="/MainController/Registered" method="POST">
    Имя пользователя: <input type="text" name="username" value=""><br>
    Пароль: <input type="password" name="password" value=""><br>
    <input type="submit">
</form><br>
----------------------------------------------------<br>
----------------------------------------------------<br>
Изменить пользователя:<br>
----------------------------------------------------<br>
<form action="/MainController/confugureUser" method="POST">
    Имя пользователя: <input type="text" name="username" value=""><br>
    Пароль: <input type="text" name="password" value=""><br>
    <input type="submit">
</form><br>
----------------------------------------------------<br>
</body>
</html>