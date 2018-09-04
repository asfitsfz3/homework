<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/">Вернуться к начальной странице</a><br>
<form action="/UploadFileController/renderUserList" method="post">
    <button name="sort" value="1" type="submit">По возрастанию</button>
    <button name="sort" value="2" type="submit">По убыванию</button>
</form>

<br>
<?foreach ($r as $value) {
    echo " Имя: " . $value['name'] . " Возраст: ";
    echo $value['age'] . "(" . $value['sov'] . ")<br>";
}?>
</body>
</html>