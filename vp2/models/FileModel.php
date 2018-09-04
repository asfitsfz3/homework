<?php
namespace app;

use PDO;

class FileModel
{
    public static function registerImage($username, $imagename)
    {
        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "SELECT id FROM users where name=?";
        $p_query = $db->prepare($sql);
        $p_query->bindParam(1, $username);

        if ($p_query->execute()) {
            $result = $p_query->fetchAll();
        }

        $db = new PDO("mysql:host=localhost;dbname=vp2", "root", "");

        $sql = "INSERT INTO images (user_id, path) VALUES (?, ?)";
        $p_query = $db->prepare($sql);

        $p_query->bindParam(1, $result[0][0]);
        $p_query->bindParam(2, $imagename);

        if ($p_query->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
