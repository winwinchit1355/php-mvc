<?php
$className = 'Home';
$url = isset($_GET['url']) ? rtrim($_GET['url'],'/') : '';
echo $url."<br>";
$url = explode('/',$url);
$className = $url[0]??$className;
$methodName = $url[1]??'';
echo $className;
echo "<br>";
echo $methodName;
echo "<br>";
print_r($url);