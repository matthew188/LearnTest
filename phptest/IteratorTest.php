<?php
/**
 * Created by PhpStorm.
 * User: yuanhao
 * Date: 16-9-8
 * Time: 上午10:36
 */
class Iterator1 implements Iterator{

    //返回下一个
    function next()
    {
        // TODO: Implement next() method.
    }
    //返回是否IsDone
    function valid()
    {
        // TODO: Implement valid() method.
    }
    //返回当前聚集对象
    function  current()
    {
        // TODO: Implement current() method.
    }
    function rewind()
    {
        // TODO: Implement rewind() method.
    }
    function key()
    {

        // TODO: Implement key() method.
    }
}
abstract class IIterator
{
    public abstract function First();
    public abstract function Next();
    public abstract function IsDone();
    public abstract function CurrentItem();
}

//具体迭代器
class ConcreteIterator extends IIterator
{
    private $aggre;
    private $current = 0;
    public function __construct(array $_aggre)
    {
        $this->aggre = $_aggre;
    }
    //返回第一个
    public function First()
    {
        return $this->aggre[0];
    }

    //返回下一个
    public function  Next()
    {
        $this->current++;
        if($this->current<count($this->aggre))
        {
            return $this->aggre[$this->current];
        }
        return false;
    }

    //返回是否IsDone
    public function IsDone()
    {
        return $this->current>=count($this->aggre)?true:false;
    }

    //返回当前聚集对象
    public function CurrentItem()
    {
        return $this->aggre[$this->current];
    }
}

$iterator= new ConcreteIterator(array('周杰伦','王菲','周润发'));
$item = $iterator->First();
echo $item."<br/>";
while(!$iterator->IsDone())
{
    echo "{$iterator->CurrentItem()}：请买票！<br/>";
    $iterator->Next();
}