<?php
namespace test2;
function test(){
    echo "test2";
}
Interface AdInterface
{
    function showAd();
    function showCategory();
}

class MaleUser implements AdInterface{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo 'iphone';
    }
    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo 'Electronics';
    }
}

class FamaleUser implements AdInterface{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo "口红";
    }
    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '化妆品';
    }

}
$a=2;
switch($a){
    case 1:
    case 2:
    case 3:
        $b=($a==1)?1:(($a==2)?2:3);
        echo $b;
        break;
    default:
        break;

}



