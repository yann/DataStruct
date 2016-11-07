<?php
/**
 * 希尔排序
 */
function shell_sort(&$arr)
{
if(!is_array($arr))return;
$n=count($arr);
for($gap=floor($n/2);$gap>0;$gap=floor($gap/=2))
{
    for($i=$gap;$i<$n;++$i)
    {
        for($j=$i-$gap;$j>=0&&$arr[$j+$gap]<$arr[$j];$j-=$gap)
        {
            $temp=$arr[$j];
            $arr[$j]=$arr[$j+$gap];
            $arr[$j+$gap]=$temp;
        }
    }
}
return $arr;
}
$arr = [9,2,4,3,5,7,6,8,1];
print_r(shell_sort($arr));