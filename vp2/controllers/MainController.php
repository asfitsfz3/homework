<?php
namespace app;

class MainController
{
    public static function renderLoginScreen()
    {
        require_once dirname(__DIR__, 1) . "/views/LoginscreenView.php";
    }

    public static function registered()
    {
        $checked = UserModel::CheckUser($_POST['username']);
        if (($checked == 0) and ($_POST['password']!=null)) {
            UserModel::RegisterUser($_POST);
            require_once dirname(__DIR__, 1) . "/views/Registered.php";
        } else {
            require_once dirname(__DIR__, 1) . "/views/RegisteredError.php";
        }
    }

    public static function authentification()
    {
        $checked = UserModel::CheckUser($_POST['username']);
        if ($checked > 0) {
            $res = UserModel::CheckPassword($_POST['username'], $_POST['password']);
            if ($res) {
                $resurse = UserModel::GetFullUserInformation($_POST['username'], $_POST['password']);
                $user_images = UserModel::getUserFilesInformation($resurse[0]['id']);
                require_once dirname(__DIR__, 1) . "/views/Cabinet.php";
            } else {
                require_once dirname(__DIR__, 1) . "/views/AuthentificationError.php";
            }
        } else {
            require_once dirname(__DIR__, 1) . "/views/AuthentificationError.php";
        }
    }

    public static function changeInformation()
    {
        $checked1 = UserModel::CheckUser($_POST['username']);
        $checked2 = UserModel::CheckPassword($_POST['username'], $_POST['password']);
        $checked3 = UserModel::CheckUser($_POST['new_username']);
        //if ((($checked1 > 0) and ($checked2)) and (($checked3==0) or ($_POST['username']==$_POST['new_username']))) {
        if ($checked2) {
            if ($_POST['username'] == $_POST['new_username']) {
                UserModel::ChangeUserInformation($_POST);
                require_once dirname(__DIR__, 1) . "/views/ChangeSuccess.php";
            } else {
                if ($checked3==0) {
                    UserModel::ChangeUserInformation($_POST);
                    require_once dirname(__DIR__, 1) . "/views/ChangeSuccess.php";
                } else {
                    require_once dirname(__DIR__, 1) . "/views/ChangeError.php";
                }
            }
        } else {
            require_once dirname(__DIR__, 1) . "/views/ChangeError.php";
        }
    }

    public static function changeAvatar()
    {
        $checked1 = UserModel::CheckUser($_POST['username']);
        $checked2 = UserModel::CheckPassword($_POST['username'], $_POST['password']);
        if (($checked1 > 0) and ($checked2)) {
            UserModel::ChangeUserAvatar($_POST['username'], $_POST['password'], $_POST['avatar']);
            require_once dirname(__DIR__, 1) . "/views/ChangeSuccess.php";
        } else {
            require_once dirname(__DIR__, 1) . "/views/ChangeError.php";
        }
    }
}
