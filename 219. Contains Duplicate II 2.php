<?php
class Solution {
    function containsNearbyDuplicate($nums, $k) {
        $ans_array=[];
        for($i=0;$i<count($nums);$i++)
        {
            if (array_key_exists($nums[$i],$ans_array) and $i-$ans_array[$nums[$i]]<=$k)
                return true;
            else
                $ans_array[$nums[$i]]=$i;
        }
        return false;
    }
}