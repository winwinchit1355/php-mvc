<?php
$className = 'Home';
$methodName = 'index';
$params = [];

$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : '';

$url = explode('/',$url);

if(file_exists(ucfirst($url[0]).".php"))
{
    $className = $url[0]??$className;
}
require_once ucfirst($className).".php";
$className = new $className;

if(method_exists($className,$url[1]))
{
    $methodName = $url[1]??$methodName;
}

call_user_func([$className,$methodName],$params);
