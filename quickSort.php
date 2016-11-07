<?php
/**
 * 快速排序
 * @param $arr
 * @return array
 */
function quickSort(&$arr){
    if(count($arr)>1){
        $k=$arr[0];
        $x=array();
        $y=array();
        $_size=count($arr);
        for($i=1;$i<$_size;$i++){
            if($arr[$i]<=$k){
                $x[]=$arr[$i];
            }elseif($arr[$i]>$k){
                $y[]=$arr[$i];
            }
        }
        $x=quickSort($x);
        $y=quickSort($y);
        return array_merge($x,array($k),$y);
    }else{
        return$arr;
    }
}
