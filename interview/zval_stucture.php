<?php
$name = range(1,1000);
var_dump(memory_get_usage());
xdebug_debug_zval('name');
$myname = &$name;
var_dump(memory_get_usage());
xdebug_debug_zval('name');
$name = range(1,1000);
var_dump(memory_get_usage());
xdebug_debug_zval('name');


$a = 1;

$b = &$a;

unset($b);

echo $a. "\n";