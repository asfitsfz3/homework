<?php
namespace app;

class UploadFileController
{
    public static function UploadFile()
    {
        var_dump($_POST);
        $path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $_FILES['userfile']['name'];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) {
            echo "down";
        } else {
            echo "not down";
        }
    }
}
