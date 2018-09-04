<?php
namespace app;

class UploadFileController
{
    public static function uploadFile()
    {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $_FILES['userfile']['name'];
        if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) {
            FileModel::RegisterImage($_POST['username'], $_FILES['userfile']['name']);
            require_once dirname(__DIR__, 1) . "/views/UploadSuccess.php";
        } else {
            require_once dirname(__DIR__, 1) . "/views/UploadError.php";
        }
    }
}
