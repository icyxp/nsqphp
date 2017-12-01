<?php
/**
 * Created by PhpStorm.
 * User: icyboy
 * Date: 17/12/1
 * Time: 上午10:24
 */

// bootstrap autoloader
spl_autoload_register(function ($class_name) {
    if ($class_name) {
        $file =   __DIR__ .'/'.'src/' ;
        $file .= str_replace('\\', '/', $class_name);
        $file .=".php";
        if (file_exists($file)) {
            include $file;
        }else{
            $file =   __DIR__ .'/'.'dependencies/react-php/src/' ;
            $file .= str_replace('\\', '/', $class_name);
            $file .=".php";
            if (file_exists($file)) {
                include $file;
            }
        }
    }
});