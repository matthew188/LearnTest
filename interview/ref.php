<?php

// 对象本身就是引用传递
class Person
{
    public $name = "zhangsan";
}

$p1 = new Person();
xdebug_debug_zval('p1');

$p2 = $p1;
xdebug_debug_zval('p1');

$p2->name = "lisi";
xdebug_debug_zval('p1');
xdebug_debug_zval('p2');



$data = ['a', 'b', 'c'];

foreach ($data as $key=>$val)
{
    $val = &$data[$key];
    var_dump($data);
}

var_dump($data);


$a='123';
$b = "aaaa{$a}bbbb";
var_dump($b);

$c=0.1;
$d=0.7;
$e=$c+$d;
var_dump($e==$c+$d);

var_dump(__FILE__);