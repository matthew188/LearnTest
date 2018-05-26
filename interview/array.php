<?php

$bbb = array(56);

echo "-----1-----";
var_dump($bbb);
$arr[] = 56;
echo "\n-----2-----";

var_dump($arr);
$arr["x"] = 42;
echo "\n-----3-----";

var_dump($arr);
unset($arr);
echo "\n-----4-----";

var_dump($arr);

class AAA{
 public function __toString()
 {
     // TODO: Implement __toString() method.
     return "aaa tostring";
 }
}
echo (new AAA());
$a = [1,3,5,3,2];
var_dump(array_values(array_flip(array_flip($a))));
setcookie("a","a");
echo 'a cookie : ',$_COOKIE['a'];