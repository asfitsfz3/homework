<?php
namespace app;

class UploadFileController
{
    public static function uploadFile()
    {
        $_FILES['userfile']['name'] = $_FILES['userfile']['name'] . ".jpg";
        $path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/" . $_FILES['userfile']['name'];

        if (UserModel::checkPassword($_POST['username'], $_POST['password'])) {
            if (move_uploaded_file($_FILES['userfile']['tmp_name'], $path)) {
                FileModel::RegisterImage($_POST['username'], $_POST['password'], $_FILES['userfile']['name']);
                require_once dirname(__DIR__, 1) . "/views/UploadSuccess.php";
            } else {
                require_once dirname(__DIR__, 1) . "/views/UploadError.php";
            }
        } else {
            require_once dirname(__DIR__, 1) . "/views/UploadError.php";
        }
    }

    public static function renderUserList()
    {
        if ($_POST['sort']=='1') {
            $resurse = UserModel::getAllUsersInformation("ASC");
        } elseif ($_POST['sort']=='2') {
            $resurse = UserModel::getAllUsersInformation("DESC");
        } else {
            $resurse = UserModel::getAllUsersInformation("ASC");
        }

        $r = $resurse;
        for ($i=0; $i<count($r); $i++) {
            if ($r[$i]['age']>18) {
                $r[$i]['sov'] = "Совершеннолетний";
            } else {
                $r[$i]['sov'] = "Несовершеннолетний";
            }
        }
        require_once dirname(__DIR__, 1) . "/views/UserList.php";
    }
}
