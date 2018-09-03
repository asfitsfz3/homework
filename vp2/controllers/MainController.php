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
        if ($checked == 0) {
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
                require_once dirname(__DIR__, 1) . "/views/Cabinet.php";
            } else {
                require_once dirname(__DIR__, 1) . "/views/AuthentificationError.php";
            }
        } else {
            require_once dirname(__DIR__, 1) . "/views/AuthentificationError.php";
        }
    }

    public static function ChangeInformation()
    {
        $checked1 = UserModel::CheckUser($_POST['username']);
        $checked2 = UserModel::CheckPassword($_POST['username'], $_POST['password']);
        if (($checked1 > 0) and ($checked2)) {

            UserModel::ChangeUserInformation($_POST);
            MainController::authentification();
            //require_once dirname(__DIR__, 1) . "/views/ChangeSuccess.php";
        } else {
            require_once dirname(__DIR__, 1) . "/views/ChangeError.php";
        }
    }
}
