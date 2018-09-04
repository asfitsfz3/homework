<?php
namespace app;

class UploadFileController
{
    public static function uploadFile()
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $_FILES['userfile']['name'];

        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) {
            $s = FileModel::RegisterImage($_POST['username'], $_POST['password'], $_FILES['userfile']['name']);
            echo $s;
            if ($s!=="error") {
                require_once dirname(__DIR__, 1) . "/views/UploadSuccess.php";
            } else {
                echo "3333333333333333333333333300000000000000000000";
                require_once dirname(__DIR__, 1) . "/views/UploadError.php";
            }
        } else {
            require_once dirname(__DIR__, 1) . "/views/UploadError.php";
        }
    }
}
