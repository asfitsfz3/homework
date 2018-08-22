<?php
function task1(array $strings, $unite_strings = false)
{

    if ($unite_strings) {
        $s="";
        foreach ($strings as $value) {
            $s=$s.$value;
        }
        return $s;
    } else {
        foreach ($strings as $value) {
            echo "<p>".$value;
        }
    }

}

function task2(string $operation, ...$numbers)
{
    $s   = '';
    $res = reset($numbers);//так я просто получаю первый элемент этого ассоциативного массива
    $s   = $s . $res;

    for ($i=1; $i<count($numbers); $i++) {
        switch ($operation) {
            case "+":
                $res = $res + $numbers[$i];
                break;

            case "-":
                $res = $res - $numbers[$i];
                break;

            case "*":
                $res = $res * $numbers[$i];
                break;

            case "/":
                $res = $res / $numbers[$i];
                break;
        }
        $s = $s . " " . $operation . " " . $numbers[$i];
    }

    $s = $s . " = " . $res;
    return $s;
}

function task3(...$numbers)
{
    if (!(count($numbers)==2) or (!((is_int($numbers[0])) and (is_int($numbers[1]))))) {
        return "Неправильное количество или тип аргументов";
    } else {
        echo "<table>";
        for ($i=1; $i<=$numbers[1]; $i++) {
            echo "<tr>";
            for ($j=1; $j<=$numbers[0]; $j++) {
                echo "<td align='center'>";
                echo $i*$j;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

function task4()
{
    return date("d.m.Y h:i", time());
}

function task5()
{
    return strtotime("24.02.2016 00:00:00");
}

function task6($str)
{
    return str_replace("К", "", $str);
}

function task7($str)
{
    return str_replace("Две", "Три", $str);
}

function task8()
{
    $file =  fopen("test.txt", "w");
    fwrite($file, "hello again");
    fclose($file);
    return "Файл создан";
}

function task9($filename)
{
    return file_get_contents($filename);
}
