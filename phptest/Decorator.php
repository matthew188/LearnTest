<?php
Interface Ican{
    function before();
    function after();
}

class Canvas implements Ican{
    protected $size;
    protected $obj = array();
    function draw()
    {
            $this->before();
            for ($i = 0; $i < 16; $i++) {
                echo "<br/>";
                for ($j = 0; $j < 16; $j++) {
                    echo " * ";
                }
            }
            $this->after();
    }

    function setRegister(Canvas $o){
        $this->obj[] = $o;
    }
    function after()
    {
        $obj = array_reverse($this->obj);
        foreach ($obj as $item) {
            $item->after();
        }

        // TODO: Implement after() method.
    }
    function before()
    {
        foreach ($this->obj as $item) {
          $item->before();
        }
        // TODO: Implement before() method.
    }
}


class Draw1 extends Canvas{
    protected $size;
    public function __construct($size)
    {
        $this->size = $size;
    }
    function before()
    {
        echo "<div style='font-size:{$this->size}'>";
    }

    function after()
    {
        echo "</div>";
    }
}

class Draw2 extends Canvas{
    protected $color;
    public function __construct($color)
    {
        $this->color = $color;
    }

    function before()
    {
        echo "<div style='color:{$this->color}'>";
    }

    function after()
    {
        echo "</div>";
    }
}


$ex = new Canvas();
$ex->setRegister(new Draw1('16px'));
$ex->setRegister(new Draw2("purple"));

$ex->draw();


