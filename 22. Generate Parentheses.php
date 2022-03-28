<?php
class Solution {

    /**
     * @param Integer $n
     * @return String[]
     */
    function generate($string,$left,$right,$n,$num,&$arr){
        if($n*2==$num){
            $arr[]=$string;
            return ;
        }
        if($left<$n)
            $this->generate($string.'(',$left+1,$right,$n,$num+1,$arr);
        if($right<$left)
            $this->generate($string.')',$left,$right+1,$n,$num+1,$arr);
    }
    function generateParenthesis($n) {
        $arr=[];
        $this->generate('',0,0,$n,0,$arr);
        return $arr;
    }
}
?>