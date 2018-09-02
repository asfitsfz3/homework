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
        UserModel::RegisterUser($_POST);
        require_once dirname(__DIR__, 1) . "/views/Registered.php";
    }
}
