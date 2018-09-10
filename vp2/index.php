<?php
namespace app;


require "vendor/autoload.php";
include_once "core/core.php";

CoreAutoload::load();
ConfigModel::configDb();

$routes = explode('/', $_SERVER['REQUEST_URI']);

$controller_name = "MainController";
$action_name = 'renderLoginScreen';

if (!empty($routes[1])) {
    $controller_name = $routes[1];
}

if (!empty($routes[2])) {
    $action_name = $routes[2];
}

$controller_name = "app\\" . $controller_name;
if ((class_exists($controller_name)) and (method_exists($controller_name, $action_name))) {
    $controller_name::$action_name();
} else {
    require "errors/404.php";
}
