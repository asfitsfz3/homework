<?php
namespace app;
use PDO;

class UserModel
{
    public static function RegisterUser(array $arr)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $arr['username']);
        $p_query->bindParam(2, $arr['password']);

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            if ($result[0][0]<=0) {
                return "not_exists";
            } else {
                return $result[0][0];
            }
        } else {
            return false;
        }
    }
}
