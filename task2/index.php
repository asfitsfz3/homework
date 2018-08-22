<pre>
<?php
require('src/functions.php');

$strings = array(
    1 => "asfsdf",
    2 => "ваываыав",
    3 => "Ф34р8а",
    4 => "ооооооооо"
);

echo task1($strings, true).PHP_EOL;
echo task2("-", 10, 3, 1, 0.5).PHP_EOL;
echo task3(5, 7).PHP_EOL;
echo task4().PHP_EOL;
echo task5().PHP_EOL;
echo task6("Карл у Клары украл Кораллы").PHP_EOL;
echo task7("Две бутылки лимонада").PHP_EOL;
echo task8().PHP_EOL;
echo task9("test.txt").PHP_EOL;
