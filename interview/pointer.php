<?php
function test(&$a){
    $a=&$a['a'];
//    var_dump($a);die;
//    $a=2;
}
$arr = ['a'=>'a1','b'=>'b1'];
test($arr);
print_r($arr);

function test2($a){
    $a = $a['a'];
    $a=2;
}$arrb = ['a'=>'a1','b'=>'b1'];
test2($arrb);
print_r(13%2);