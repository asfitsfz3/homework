<?php
$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");


for ($i=1; $i<=100; $i++) {
    $s = "";
    for ($j=1; $j<=rand(2, 6); $j++) {
        $s=$s . chr(rand(40, 68));
    }
    $sql = "INSERT INTO users (name, password, age) VALUES (?, ?, ?)";
    $p_query = $db->prepare($sql);

    $p_query->bindParam(1, htmlentities($s));
    $p_query->bindParam(2, htmlentities(""));
    $p_query->bindParam(3, htmlentities(rand(0, 300)));

    $p_query->execute();
}
