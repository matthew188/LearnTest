<?php
class A {
    CONST AVAL=1;
    public function Aself(){
        echo self::AVAL."\n";
    }
    public function Astatic(){
        echo static::AVAL."\n";
    }
}

class B extends A{
    CONST AVAL=2;
//    public function Aself(){
//        echo self::AVAL;
//    }
//    public function Astatic(){
//        echo static::AVAL;
//    }
}
$a =new B();
$a->Aself();

$a->Astatic();

$a =new A();
$a->Aself();

$a->Astatic();
