<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<a href="/">Вернуться к начальной странице</a><br>

<?foreach ($resurse as $value){
    echo $value['name'] . "<br>";
}?>
</body>
</html>