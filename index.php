<?php
$className = 'Home';
$methodName = 'index';
$params = [];

$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : '';

$url = explode('/',$url);

if(isset($url[0]) && file_exists(ucfirst($url[0]).".php"))
{
    $className = $url[0] ??$className;
    unset($url[0]);
}
require_once ucfirst($className).".php";
$className = new $className;

if(isset($url[1]) && method_exists($className,$url[1]))
{
    $methodName = $url[1]??$methodName;
    unset($url[1]);
}
$params = !empty($url) ?  array_values($url) : [];

call_user_func([$className,$methodName],$params);
