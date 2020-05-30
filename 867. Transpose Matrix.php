<?php
class Solution {
    function transpose($A) {
        $m=count($A);
        $n=count($A[0]);
        $ans=[];
        for($i=0;$i<$n;$i++)
        {
            for($j=0;$j<$m;$j++)
                $ans[$i][$j]=$A[$j][$i];
        }
        return $ans;
    }
}