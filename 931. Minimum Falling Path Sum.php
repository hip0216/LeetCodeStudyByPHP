<?php
class Solution {
    function minFallingPathSum($A) {
        $m=count($A);
        $n=count($A[0]);
        for($i=1;$i<$m;$i++)
        {    
            for($j=0;$j<$n;$j++)
            {
                if($j==$n-1)
                    $A[$i][$j]+=min($A[$i-1][$j],$A[$i-1][$j-1]);
                else if($j==0)
                    $A[$i][$j]+=min($A[$i-1][$j],$A[$i-1][$j+1]);
                else
                    $A[$i][$j]+=min($A[$i-1][$j-1],$A[$i-1][$j],$A[$i-1][$j+1]);
            }
        }
        return min($A[count($A)-1]);
    }   
}