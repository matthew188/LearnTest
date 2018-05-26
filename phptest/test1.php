<?php
namespace test1;
function test(){
    echo "test1";
}
$db = Factory::createDatabase();
echo $db->A();

$ab = SingleClass::getInstance();
echo $ab->B();

class Factory{
    static function createDatabase(){
        return new Database();
    }
}

class Database{
    public function A(){
        return " A ";
    }
}

class SingleClass{
    static $db;
    private function __construct()
    {
    }
    static function getInstance(){
        if(self::$db){
            return self::$db;
        }
        else{
            self::$db = new self();
            return self::$db;
        }
    }
    public function B(){
        return " B ";
    }

}


/*
 * php self 和 this 的区别
 *
 */
class A{
    static $st;
    protected $pro;
    public function __construct($var)
    {
        self::$st = $var;
    }
    public function method($p){
        $this->pro = $p;
    }
    public function getPro(){
        return $this->pro;
    }
}
$a = new A(123);
$b = new A(345);
$a->method(777);
$b->method(888);
var_dump($a::$st); //  123
var_dump($b::$st); //  345
var_dump($a->getPro());  // 777
var_dump($b->getPro());  // 888
echo "git-branch pmt-1";



class Toy {

    public static function status() {
        self::getStatus();  // Noncompliant; will always print "Sticks are fun!" even when called from a subclass which overrides this method;
    }

    protected static function getStatus() {
        echo "Sticks are fun!";
    }
}

class Ball extends Toy {

    protected static function getStatus() {  // Doesn't actually get called
        echo "Balls are fun!";
    }
}

$myBall = new Ball();
$myBall::status();  // Prints "Sticks are fun!"
$aa = [ ];
var_dump(array_values($aa)[0]);

$aaa = preg_match("/dp\/lp\/([a-z]+)\/(.*)/",'dp/lp/jingan/p1/',$res);
var_dump($res);