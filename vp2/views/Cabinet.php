<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
Личный кабинет пользователя <?echo $_POST['username'];?>
Имя: <?echo $_POST['username'];?>
Пароль: <?echo $_POST['password'];?>
Описание: <?echo $_POST['description'];?>
Возраст <?echo $_POST['age'];?>

Заполните или измените информацию о себе:

<form action="/MainController/ChangeInformation" method="POST">
    Имя пользователя: <input type="text" name="username" value="">
    Пароль: <input type="password" name="password" value="">
    Описание: <input type="text" name="description" value="">
    Возраст: <input type="password" name="age" value="">
    <input type="submit">
</form>



</body>
</html>