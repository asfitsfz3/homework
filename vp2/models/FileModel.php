<?php
namespace app;

use PDO;

class FileModel
{
    public static function registerImage($username, $password, $imagename)
    {
        $ret = "";
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT id FROM users where name=? and password=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, htmlentities($username));
        $p_query->bindParam(2, htmlentities($password));
        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
        }
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "INSERT INTO images (user_id, path) VALUES (?, ?)";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $result[0][0]);
        $p_query->bindParam(2, htmlentities($imagename));

        $p_query->execute();
    }
}
