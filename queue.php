<?php
/*
 * 队列具有先入先出的原则,
 * 队尾入队，队头出队
 * */
class  queue{
    /**
     * 队尾入队
     * php中array_push直接插入到数组尾部
     * @param $arr
     * @param $var
     * @return int
     */
    public function enQueue($arr,$var)
    {
        return array_push($arr,$var);
    }

    /**
     * 队首出队　
     * array_shift,删除数组中的第一个元素，并返回被删除元素的值：
     * @param $arr
     * @return mixed
     */
    public function deQueue($arr)
    {
        return array_shift($arr);
    }

    public function countQueue($arr)
    {
        return count($arr);
    }
    public function headQueue($arr)
    {
        return reset($arr);
    }
    public function endQueue($arr)
    {
        return end($arr); //返回队列的尾部
    }
}