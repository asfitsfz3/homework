<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

Измените информацию о пользователе <?echo $u;?> с паролем <?echo $p;?>:<br>
<br>
<form action="/MainController/ChangeInformation" method="POST">


        Новое имя: <input type="text" name="new_username" value=""><br>
        Новый пароль: <input type="text" name="new_password" value=""><br>
        Описание: <input type="text" name="description" value=""><br>
        Возраст: <input type="text" name="age" value=""><br>
        Электронная почта: <input type="text" name="email" value=""><br><br>
        Введите старое имя и пароль для подтверждения изменений:<br><br>
        Старое имя: <input type="text" name="username" value="<?echo $u;?>"><br>
        Старый пароль: <input type="password" name="password" value="<?echo $p;?>"><br>
        <input type="submit">
</form>
<br>


</body>
</html>