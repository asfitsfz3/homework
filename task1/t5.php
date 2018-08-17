<pre>
<?php
$bmw = array(
    "model" => "X5",
    "speed" => "120",
    "doors" => "5",
    "year"  => "2015"
);
$toyota = array(
    "model" => "Fsdfs",
    "speed" => "300",
    "doors" => "24",
    "year"  => "2115"
);
$opel = array(
    "model" => "oploap",
    "speed" => "1300",
    "doors" => "1",
    "year"  => "1842"
);
$cars = array (
    "bmw"    => $bmw,
    "toyota" => $toyota,
    "opel"   => $opel
);
foreach ($cars as $key => $value) {
    echo "CAR ".$key.PHP_EOL;
    echo $value["model"]." ".$value["speed"]." ".$value["doors"]." ".$value["year"].PHP_EOL.PHP_EOL;
}
