<?php
namespace app;

class FileModel
{
    public static function RegisterUser(array $arr)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $arr['username']);
        $p_query->bindParam(2, $arr['password']);

        if ($p_query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
