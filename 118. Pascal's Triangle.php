<?php
class Solution {
    function generate($numRows) {
        $ans=[];
        for($i=0;$i<$numRows;$i++)
        {
            for($j=0;$j<$i+1;$j++)
                if($i==0 and $j==0) $ans[$i][$j]=1;
                else $ans[$i][$j]=$ans[$i-1][$j]+$ans[$i-1][$j-1];
        }
        return $ans;
    }
}