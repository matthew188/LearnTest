<?php
var_dump(1234);
$yac = new Yac();
for($i = 1; $i <= 100; $i++){
    $key = 'key_' . $i;
    $value = mt_rand(0, 10000);
    if( ! $yac->set($key, $value))
        var_dump("Yac set error: $key --> $value");
}
for($i = 1; $i <= 100; $i++){
    $key = 'key_' . $i;
    $value = $yac->get($key);
    if($value === false){
        var_dump("Yac get error: $key not found");
    }
}
?>