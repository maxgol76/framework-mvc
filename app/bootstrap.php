<?php

//require_once '../app/config/config.php';

spl_autoload_register(function($className) {
    require_once preg_replace("/\\\\/", "/", $className).".php";
});
