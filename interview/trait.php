<?php
trait TestTrait {
    public function testMethod() {
        echo "Class:1 " . __CLASS__ . PHP_EOL;
    }
}

class BaseClass {
    public function testMethod() {
        echo "Class:3 " . __CLASS__ . PHP_EOL;
    }
    public function getVar(){
        echo '123';
    }
}


class TestClass extends BaseClass {
    use TestTrait;
    /**
     * @var BaseClass
     */
    public $classvar;
    public function calVar(){
        $this->classvar = new BaseClass();
        $this->classvar->getVar();
    }
}

$t = new TestClass();
$t->testMethod();
$t->calVar();

