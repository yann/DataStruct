<?php
/**
 * 插入排序
 * 直接插入排序
 */
$arr = [9,2,4,3,5,7,6,8,1];
//$arr = [2,5,3];
function straightInsertionSort($arr)
{
    $n = count($arr);
    for ($i=1;$i<$n;$i++)
    {
        $temp = $arr[$i];
        $j = $i-1;
        while ($j>=0&&$temp<$arr[$j])
        {
            $arr[$j+1] = $arr[$j];
            $j--;
        }
        $arr[$j+1] = $temp;
    }
    return $arr;
}
print_r(straightInsertionSort($arr));

