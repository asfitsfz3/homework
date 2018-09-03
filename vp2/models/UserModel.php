<?php
namespace app;
use PDO;

class UserModel
{
    public static function CheckUser($username)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT count(name) FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, $username);

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            return $result[0][0];
        }
    }

    public static function CheckPassword($username, $password)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT password FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, $username);

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            if ($result[0][0]==$password) {
                return true;
            } else {
                return false;
            }
        }
    }

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

    public static function GetFullUserInformation($username, $password)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM users where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $username);
        $p_query->bindParam(2, $password);

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        }
    }

    public static function ChangeUserInformation($arr)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "UPDATE users SET name=?, password=?, description=?, age=? where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $arr['new_username']);
        $p_query->bindParam(2, $arr['new_password']);
        $p_query->bindParam(3, $arr['description']);
        $p_query->bindParam(4, $arr['age']);
        $p_query->bindParam(5, $arr['username']);
        $p_query->bindParam(6, $arr['password']);

        return $p_query->execute();
    }
}
