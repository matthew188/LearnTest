<?php
$str = "LAMP";
$str1 = "LAMPBrother";
$strc = strcmp($str,$str1);
var_dump($strc);
switch ($strc){
case 1:
echo"str > str1";
break;
case –1:
echo"str < str1";
break;
case 0:
echo"str=str1";
break;
default:
echo"str <> str1";
}