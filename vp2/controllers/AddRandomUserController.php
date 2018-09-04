<?php
namespace app;

class AddRandomUserController
{
    public static function add()
    {
        include_once dirname(__DIR__, 1) . "/AddRandomUsers.php";
    }
}
