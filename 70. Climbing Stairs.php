<?php
class Solution {
    function climbStairs($n) {
        $dp_array=array();
        $dp_array[0]=1;
        $dp_array[1]=1;
        for($j=2;$j<=$n;$j++)
        {
         array_push($dp_array,$dp_array[$j-2]+$dp_array[$j-1]);
        }
        return $dp_array[count($dp_array)-1];
    }
}