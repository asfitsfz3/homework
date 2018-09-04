<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/">Вернуться к начальной странице</a><br>
Личный кабинет пользователя <b><?echo $resurse[0]['name'];?></b><br>
--------------------------------------<br>
<img width="100" height="100" src="../uploads/<?echo $resurse[0]['avatar'];?>" alt="Картинка отсутствует"><br>
--------------------------------------<br>
Имя: <?echo $resurse[0]['name'];?><br>
Пароль: **********<br>
Описание: <?echo $resurse[0]['description'];?><br>
Возраст <?echo $resurse[0]['age'];?><br>
<br>
--------------------------------------
<br>
Список файлов, которые вы загрузили:<br>
<form action="/MainController/ChangeAvatar" method="POST">

    <?php
    foreach ($user_images as $value) {?>
        <?echo $value['path'];?>
<input type="radio" name="avatar" value="<?echo $value['path'];?>"><br>
    <?}?><br>
    Выберите файл и введите имя пользователя и пароль, чтобы изменить аватарку:<br>
    Имя пользователя:<input type="text" name="username" value="" /><br>
    Пароль: <input type="text" name="password" value="" /><br>
    <input type="submit"><br>
</form>
<br>
--------------------------------------
<br>
<br>
Заполните или измените информацию о себе:<br>
<br>
<form action="/MainController/ChangeInformation" method="POST">

    Новое имя: <input type="text" name="new_username" value=""><br>
    Новый пароль: <input type="text" name="new_password" value=""><br>
    Описание: <input type="text" name="description" value=""><br>
    Возраст: <input type="text" name="age" value=""><br><br>
    Введите старое имя и пароль для подтверждения изменений:<br><br>
    Старое имя: <input type="text" name="username" value=""><br>
    Старый пароль: <input type="password" name="password" value=""><br>
    <input type="submit">
</form>
<br>
--------------------------------------
<br>
Загрузите файл:<br>
<br>
<form enctype="multipart/form-data" action="/UploadFileController/UploadFile" method="POST">
    Введите имя пользователя и пароль, чтобы загрузить файл:<br>
    Имя пользователя:<input type="text" name="username" value="" /><br>
    Пароль: <input type="text" name="password" value="" /><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000000" />
    Отправить этот файл: <input name="userfile" type="file" /><br>
    <input type="submit" value="Отправить файл" />
</form>



</body>
</html>