<?php
class Solution {
    function flipAndInvertImage($A) {
        $m=count($A);
        for($i=0;$i<$m;$i++)
        {
            $A[$i]=array_reverse($A[$i]);
            for($j=0;$j<$m;$j++)
                ($A[$i][$j]==0)?$A[$i][$j]=1:$A[$i][$j]=0;
        }
        return $A;
    }
}