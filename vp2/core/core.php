<?php
namespace app;

class CoreAutoload
{
    public static function load()
    {
        spl_autoload_register(function ($className) {
            if (strpos(strtolower($className), 'controller') !== false) {
                $filePath = dirname(__DIR__, 1) . '/controllers/';
            } elseif (strpos(strtolower($className), 'model') !== false) {
                $filePath = dirname(__DIR__, 1) . '/models/';
            } else {
                $filePath = dirname(__DIR__, 1) . '/';
            }

            $filePath = $filePath . $className;
            $filePath = str_replace('\\', '/', $filePath);
            $filePath = str_replace('/app/', '/', $filePath);
            $filePath = $filePath . '.php';

            if (file_exists($filePath)) {
                include_once $filePath;
            }
        });
    }
}
