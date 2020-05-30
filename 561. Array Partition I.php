<?php
class Solution {
    function arrayPairSum($nums) {
        sort($nums);
        $i=0;
        $ans=0;
        while($i<count($nums)-1)
        {
            $ans+=$nums[$i];
            $i+=2;
        }
        return $ans;
    }
}