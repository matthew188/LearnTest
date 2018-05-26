<?php
class Observer{
    protected $obj = array();
    protected $price=0;
    public function attach(Buyers $bu){
       $this->obj[] = $bu;
    }
    public function increPrice($p){
        $this->price = $p;
    }
    public function getPrice(){
        return $this->price;
    }
    function A(){
        echo "A <br/>";
    }

    function notify(){
        foreach ($this->obj as $item) {
            $item->duyourthing($this);
        }
    }
}

interface Buyers{
    function duyourthing(Observer $o);
}

class Buyer1 implements Buyers{
    function duyourthing(Observer $o){
        if($o->getPrice()<10){
            echo "Buyer1 mai mai mai<br/>" ;
        }
        else{
            echo "Buyer1 mai bu dong<br/>";
        }
    }
}

class Buyer2 implements Buyers{
    function duyourthing(Observer $o){
        echo "Buyer2 you qian mai!!!<br/>";
    }
}

$bu = new Observer();
$bu->attach(new Buyer1());
$bu->attach(new Buyer2());
$bu->increPrice(11);
$bu->notify();
