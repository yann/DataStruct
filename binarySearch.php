<?php
/**
 * Created by PhpStorm.
 * User: yangyue
 * Date: 16-11-8
 * Time: 上午10:16
 * 二分查找
 */
 function binarySearch($arr,$target){
     $low = 0;
     $high = count($arr)-1;
     while ($low <= $high)
     {

         $mid = floor(($low + $high) / 2);

         if($arr[$mid] == $target) {
             return $mid;
         }
         if ($arr[$mid] < $target)
         {
             $low = $mid + 1;

         }
         if ($arr[$mid] > $target){

             $high = $mid -1;
         }

     }
     return false;
 }

$arr = array(1, 3, 5, 7, 9, 11);
$i = binarySearch($arr,7);
echo ($i);