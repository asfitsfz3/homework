<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/">Вернуться к начальной странице</a><br>
Личный кабинет пользователя <?echo $resurse[0]['name'];?><br>
Имя: <?echo $resurse[0]['name'];?><br>
Пароль: <?echo $resurse[0]['password'];?><br>
Описание: <?echo $resurse[0]['description'];?><br>
Возраст <?echo $resurse[0]['age'];?><br>
<br>
Заполните или измените информацию о себе:<br>
<br>
<form action="/MainController/ChangeInformation" method="POST">
    Введите старое имя и пароль для подтверждения изменений:
    Старое имя: <input type="text" name="username" value="">
    Старый пароль: <input type="password" name="password" value=""><br>
    -----------------------
    Новое имя: <input type="text" name="new_username" value="">
    Новый пароль: <input type="text" name="new_password" value="">
    Описание: <input type="text" name="description" value="">
    Возраст: <input type="text" name="age" value="">
    <input type="submit">
</form>
Загрузите файл:<br>
<br>
<form enctype="multipart/form-data" action="/UploadFileController/UploadFile" method="POST">
    <input type="hidden" name="username" value="<?echo $resurse[0]['name'];?>" />
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Отправить файл" />
</form>



</body>
</html>