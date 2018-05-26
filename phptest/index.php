<?php
phpinfo();die;
echo 'hello world';
echo "shenme s  s ss s";
$arr = ['adf','a','b','fdsa','a','gfd','adf','b','yyy','a','bbb','aa'];
foreach ($arr as $item) {
    $new_arr[$item] =1;
}
$new=[];
foreach ($new_arr as $key=> $item) {
 $new = array_merge($new,array($key));
}
print_r($arr);
print_r($new);

setcookie("a","a");
echo 'a cookie : ',$_COOKIE['a'];
echo ip2long("127.0.0.1");
echo "\n",long2ip(2130706433);
echo "\n",inet_ntop(2130706433);