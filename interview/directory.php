<?php
function releative_path($path1,$path2){
    $arr1 = explode("/",dirname($path1));
    $arr2 = explode("/",dirname($path2));

    for ($i=0,$len = count($arr2); $i < $len; $i++) {
        if ($arr1[$i]!=$arr2[$i]) {
            break;
        }
    }

    // 不在同一个根目录下
    if ($i==1) {
        $return_path = array();
    }

    // 在同一个根目录下
    if ($i != 1 && $i < $len) {
        $return_path = array_fill(0, $len - $i,"..");
    }

    // 在同一个目录下
    if ($i == $len) {
        $return_path = array('./');
    }

    $return_path = array_merge($return_path,array_slice($arr1,$i));
    return implode('/',$return_path);
}

$a = '/a/b/c/d/kj/hh/k/le.php';
$b = '/a/b/12/34/c.php';
$c = '/e/b/c/d/f.php';
$d = '/a/b/c/d/g.php';

echo releative_path($a,$b);//结果是../../c/d
echo "\n";
echo releative_path($a,$c);//结果是a/b/c/d
echo "\n";
echo releative_path($a,$d);//结果是./
echo "\n";
?>