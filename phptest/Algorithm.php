<?php
namespace algorithm;

//$startdate="2010-12-11 11:40:00";
//$enddate=date('y-m-d h:i:s');
//$date=strtotime($enddate);
//$date2=strtotime($startdate);
//var_dump($date2);

class SelectionStrategy{
    private static $sql;
    private static $inst;
    private function __construct(){}
    public function getInstance(){
        if(self::$inst){
            return self::$inst;
        }else{
            self::$sql = mysqli_connect("192.168.1.167", "new_home", 123456);
            if (!self::$sql) {
                die("connect failed" . mysqli_error());
            } else echo "new connect succeeded" . "</br>";
            $db = mysqli_select_db(self::$sql, "aifangcrm_car");
            if ($db) {
                echo "db select\n<br/>";
            } else echo "db failed\n<br/>";
            self::$inst = new self();
            return self::$inst;
        }
    }
    function MyQuery($query){
        $res = mysqli_query(self::$sql,$query);
        $data = array();
        while($row = mysqli_fetch_array($res)){
            $data[] = $row;
        }
        return $dat私事处理私事处理a;
    }
    function close(){
        mysqli_close(self::$sql);
    }
    function timeDiff($date){   //计算相差的天数
        $today=date('y-m-d H:i:s');
        $res=floor((strtotime($today)-$date)/86400);
        var_dump($res);
        return $res;
    }

    function Selectmethod($arr){//计算两台服务器的使用比例,$arr为query选择所得结果
        $serve = array();
        foreach ($arr as $k=>$item) {
            $s_id = $item['service_id'] ;
            $t = $this->timeDiff($item['die_time']);
//            var_dump($k,$t);                   //查看每次宕机时间差
            if($t<=0){
                $t=0;
            }
            $serve[$s_id] +=1/($t+1);
        }
        $sum=0;
        $sum_arr = array();
        foreach ($serve as $k=>$item) {
            $serve[$k] = floor((1/$item)*1000);
            $sum +=$serve[$k];
            $sum_arr[$k] =$sum;
        }
        $res = rand(1,$sum);
//        $count = count($serve);
        $service_id = 0;

        /*
         * 模拟1000次选择
         */
        $s2=$s3=0;
        for($i=0;$i<1000;$i++){                    //        自定义次数
            $rand = rand(1,$sum);
            foreach ($sum_arr as $k=>$item) {
                if($rand <= $item){
                    echo $k.': bingo \n<br/>';
                    if($k==2)
                        $s2++;
                    else if($k==3)
                        $s3++;
                    break;
                }
            }
        }
        var_dump($s2,'----------------',$s3);

        return $serve;
    }
}

//$s = SelectionStrategy::getInstance();
//$res = $s->MyQuery("select * from die_log where dead=2");
//$serve = $s->Selectmethod($res);
//$s->close();
//
//
//var_dump($serve);

$s ="2016-09-20";
var_dump(strtotime($s));
$datetime=date('Y-m-d',2217600);
var_dump($datetime);


