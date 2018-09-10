<?php
namespace app;

use PDO;
use Illuminate\Database\Capsule\Manager as Capsule;

class UserModel
{
    public static function checkUser($username)
    {
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT count(name) FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, htmlentities($username));

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
            return $result[0][0];
        }*/
        $res = UserTableModel::where('name', '=', $username)->get()->count();

        //$result = $res->toArray();

        return $res;
    }

    public static function checkPassword($username, $password)
    {
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

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
        }*/
        $res = UserTableModel::where('name', '=', $username)->get();

        $result = $res->toArray();

        if ($result[0]['password'] == $password) {
            return true;
        } else {
            return false;
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
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM users where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($username));
        $p_query->bindParam(2, htmlentities($password));

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        }*/

        $result = UserTableModel::where('name', '=', $username)
            ->where('password', '=', $password)
            ->get();
        return $result->toArray();
    }

    public static function getAllUsersInformation($param)
    {
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM users ORDER BY age " .$param;
        $p_query = $db->prepare($sql);

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        }*/

        if ($param=="DESC") {
            $result = UserTableModel::where('id', '!=', '0')->get()->sortByDesc("age");
        } else {
            $result = UserTableModel::where('id', '!=', '0')->get()->sortBy("age");
        }

        return $result->toArray();
    }

    public static function getUserFilesInformation($user_id)
    {
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT * FROM images where user_id=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($user_id));

        if ($p_query->execute()) {
            return $result = $p_query->fetchAll();
        } else {
            return false;
        }*/

        $result = ImageTableModel::where('user_id', '=', $user_id)->get();
        return $result->toArray();
    }

    public static function changeUserInformation($arr)
    {
        /*$db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "UPDATE users SET name=?, password=?, description=?, age=?, email=? where name=? and password=?";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, htmlentities($arr['new_username']));
        $p_query->bindParam(2, htmlentities($arr['new_password']));
        $p_query->bindParam(3, htmlentities($arr['description']));
        $p_query->bindParam(4, htmlentities($arr['age']));
        $p_query->bindParam(6, htmlentities($arr['username']));
        $p_query->bindParam(7, htmlentities($arr['password']));
        $p_query->bindParam(5, htmlentities($arr['email']));

        return $p_query->execute();*/


        $result = UserTableModel::where('name', '=', $arr['username'])
            ->where('password', '=', $arr['password'])
            ->get();
        $r = $result->toArray()[0]['id'];

        $model = UserTableModel::find((int)$r);
        $model->name = $arr['new_username'];
        $model->password = $arr['new_password'];
        $model->description = $arr['description'];
        $model->email = $arr['email'];
        $model->age = $arr['age'];
        $model->save();
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
