<?php
class serach{
    public static $a = 0;
    public static $arr = [0,1,2,3,4,5,6,7,8,9,10,11];
    public function search($ob){
        $arr = [1,2,3,4,5,6,7,8,9,10,11];
        $start = intval(count($arr)/2);
        //$this->two($ob,0,count(self::$arr)-1);

        $start=0;$end=count(self::$arr)-1;
        $mid =0;
        $cou = 0;
        while($start <=$end ){
            $cou++;
            $mid = intval(($start+$end)/2);
            if($ob<self::$arr[$mid]){
                $end = $mid -1;
            }elseif($ob >self::$arr[$mid]){
                $start = $mid+1;
            }else{
                break;
            }
        }
        if(self::$arr[$mid]==$ob){
            echo $cou,'次,result[',$mid,"] : ",self::$arr[$mid];
        }else{
            echo '未找到';
        }

//        foreach ($arr as $key =>$item) {
//            self::$a = self::$a+1;
//            if($item==$ob){" ",echo "值为?:;",self::$arr[$mid];
//                echo "该值的key是:",$key;
//                break;
//            }
//        }
    }
    private function two($ob,$start,$end){
        ++self::$a;
        $mid = intval(($start+$end)/2);
        echo $start," ",$end," ",$mid,"\n";
        if($start<$end){
            if($ob <self::$arr[$mid]){
                $this->two($ob,$start,$mid-1);

            }else if($ob >self::$arr[$mid] ){
                $this->two($ob,$mid+1,$end);
            }else{
                echo "值为:",self::$arr[$mid];
            }
        }else{
            echo "值为:",self::$arr[$mid];
        }
    }
}
$class = new serach();
$class->search(5);
