<?php
    function queen($n){
        $res = 0;
        $pos[1] = 1;
        $pos[2] = 1;
        $queen[1][1] = 1;
        $queen[1][2] = 1;
        $arr = array();
           for($i=1;$i<=$n;$i++){
               for($j=1;$j<$n;$j++){
                   $arr[$i][$j] = 1;
               }
           }

        while(true){
            for($t=1;$t<$n;$t++){   //次数

                for($i=1;$i<=$n;$i++){    //遍历更新数组的值
                    for($j=1;$j<$n;$j++){
                        $x = ($j-$pos[2])/($i-$pos[1]) ;

                        if(($i == $pos[1]) || ($j == $pos[2]) || $x==1){
                            $arr[$i][$j] = 0;
                        }
                        else{
                            $pos[1] = $i;
                            $pos[2] = $j;
                        }


                    }
                }

                if($arr[$pos[1]][$pos[2]] !=0){
                    $queen[$t][1] = $pos[1];
                    $queen[$t][2] = $pos[2];

                    if($t==$n)
                        $res++;
                }


            }

            break;
        }



        return $res;

    }

?>