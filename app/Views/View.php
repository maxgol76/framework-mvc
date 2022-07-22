<?php

namespace App\Views;

class View
{
    public static function render($view, $args = [])
    {

        extract($args, EXTR_SKIP);

        $file = __DIR__ . "/../App/Views/$view";

        if (is_readable($file)) {
            require $file;
        } else {
            echo 'not view';
            //throw new \Exception("$file not found");
        }
    }
}
