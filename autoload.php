<?php

spl_autoload_register('sysAutoLoad');

function sysAutoLoad($className){

$path = 'models/';
$extenstion = '.class.php';
$fullPath = $path.$className.$extenstion;

if(!file_exists($fullPath)){

    return false;
}

include_once $fullPath;

}

