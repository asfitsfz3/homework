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
    $s='';
    $res=reset($numbers);//так я просто получаю первый элемент этого ассоциативного массива
    $s = $s . $res;

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
        $s = $s . $operation . $numbers[$i];
    }

    $s = $s . " = " . $res;
    return $s;
}
