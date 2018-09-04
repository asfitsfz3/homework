<?php
namespace app;

use PDO;

class UserModel
{
    public static function checkUser($username)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT count(name) FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, htmlentities($username));

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            return $result[0][0];
        }
    }

    public static function checkPassword($username, $password)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT password FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, htmlentities($username));

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            if ($result[0][0]==$password) {
                return true;
            } else {
                return false;
            }
        }
    }

    public static function registerUser(array $arr)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "INSERT INTO users (name, password) VALUES (?, ?)";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($arr['username']));
        $p_query->bindParam(2, htmlentities($arr['password']));

        if ($p_query->execute()) {
                return true;
        } else {
                return false;
        }
    }

    public static function getFullUserInformation($username, $password)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM users where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($username));
        $p_query->bindParam(2, htmlentities($password));

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        }
    }

    public static function getAllUsersInformation($param)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM users ORDER BY age " .$param;
        $p_query = $db->prepare($sql);

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        }
    }

    public static function getUserFilesInformation($user_id)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM images where user_id=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($user_id));

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        } else {
            return false;
        }
    }

    public static function changeUserInformation($arr)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "UPDATE users SET name=?, password=?, description=?, age=? where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($arr['new_username']));
        $p_query->bindParam(2, htmlentities($arr['new_password']));
        $p_query->bindParam(3, htmlentities($arr['description']));
        $p_query->bindParam(4, htmlentities($arr['age']));
        $p_query->bindParam(5, htmlentities($arr['username']));
        $p_query->bindParam(6, htmlentities($arr['password']));

        return $p_query->execute();
    }

    public static function changeUserAvatar($username, $password, $avatar)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "UPDATE users SET avatar=? where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($avatar));
        $p_query->bindParam(2, htmlentities($username));
        $p_query->bindParam(3, htmlentities($password));

        return $p_query->execute();
    }
}
