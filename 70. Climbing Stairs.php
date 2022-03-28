<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        $arr=[1,2];
        for($i=2;$i<$n;$i++){
            $arr[$i]=$arr[$i-1]+$arr[$i-2];
        }
        return $arr[$n-1];
    }
}
?>