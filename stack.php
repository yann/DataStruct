<?php
    class stack{
        /**
         * 入栈
         * array_unshift()　在数组前面插入一个元素
         * @param $arr
         * @param $var
         * @return int
         *
         */
    public function enStack($arr,$var){
        return array_unshift($arr,$var);
    }

        /**
         * 出栈
         * array_pop返回数组中最后一个元素，并删除
         * @param $arr
         * @return mixed
         */
    public function outStack($arr)
    {
        return array_pop($arr);
    }
    }
