<?php
//phpinfo();
echo time();
require 'phptest/test1.php';
require 'phptest/test2.php';
test1\test();
test2\test();
$stack = new SplStack();
$stack->push("\ndata1\n");
$stack->push("\ndata2\n");
echo $stack->pop();
echo $stack->pop();

class example {
    protected $sex;
    function setSex( $sex){
        $this->sex = $sex ;
    }
    function index(){
        echo "ad: ";
        $this->sex->showAd();
        echo "<br/> category:";
        $this->sex->showCategory();
    }
}
//next', 'valid', 'current', 'rewind', 'key
$a = new example();
if(isset($_GET['famale'])){
    $sex = new \test2\FamaleUser();
}
else{
    $sex = new \test2\MaleUser();
}
$a->setSex($sex);
$a->index();

$abc = 'haha';

echo "wo shuo {$abc}\n";

$today=date('y-m-d H:i:s');
$data = strtotime("2016-09-14 00:00:01");
$res=floor((strtotime($today)-$data)/86400);
var_dump($data,strtotime($today),$res);
var_dump((strtotime($today)-$data));
//new PDO();
//var_dump($s->timeDiff(strtotime("20160910 15:14:00")));

$timestamp=1473477000;
$datetime=date('Y-m-d H:i:s',$timestamp);
var_dump($datetime,1111111111);
var_dump(strpos("abcdefghijk",'de'));
var_dump(substr("abcdefghijk",5));
$rep = preg_replace('@<(\w+)\b.*?>(?<inner>.*?)</\1>@si', '$1', "456123");
var_dump($rep);

function abc(){
    var_dump('abc abc abc');die;
}
spl_autoload_register('abc');

$fdsa = array(
    'avc'=>321,
    'what'=>'fdsf',
    'haha'=>223,
    'haha1'=>2223,
    'use'=>true
    );
var_dump('1111',count($fdsa));

var_dump(1111111,mktime(0,0,0, 9, 30, 2016));
var_dump(time());
var_dump(date('Y-m-d'));
if(strtotime("2016-9-29")<strtotime(date("Y-m-d")))
{
    echo "<=";
}
else echo ">";
echo "origin master\n";
var_dump(strtotime(date("Y-m-d H:i:s")));

$ids=array(0);
        foreach ($ids as $key=>$value)
        {
            if ($value === 0)
                unset($ids[$key]);
        }
var_dump($ids);


$data = array(
    'directsale_id' => 11111,
    'rrn' => 22222
);
$data['income_date'] = date('Y-m-d', 1367129430);
$data['income_price'] = 12322;
var_dump($data);

$aaa=1;$bbb=2;
var_dump(($aaa && $bbb && $bbb)!=$aaa);
echo dirname(dirname(__FILE__));
echo "\n";
echo __FILE__;
var_dump(strtotime("2017-02-28 11:12:21"));
var_dump(date("Y-m-d h:i:s",1487846639));
$a='13918203929';
var_dump(substr($a,0,3).'****'.substr($a,-4));
var_dump('aifang-ajjr-order-log-service');
var_dump(date("Ymd", strtotime("7 day ".'2017-04-27')));

var_dump(strtotime('20170526' ));
if(strpos('/seefull', 'seefull')){
    var_dump(23432423);
};
echo '元/m²m²㎡';
var_dump(strtolower('pmt-39843A-PC'));

var_dump(strpos("www.baidu.com/asdf.php?fdsf=234ff43" , '.php'));

var_dump(floor((strtotime('20171006')-strtotime('20171005'))/86400));
$params = [
    'type'=>'user_code',
    'value'=>'SHS824'
];
uksort($params, 'strcmp');
var_dump(md5(http_build_query($params).'ajkzwww'));

var_dump(date("Ymd", strtotime("7 day ".'2017-04-27')));
var_dump(strpos('大诺・方舟天地','・')!==false);
(0) || var_dump(123);
var_dump(decbin(10),preg_match('/^1([01])*00$/',decbin(12),$res),$res);

