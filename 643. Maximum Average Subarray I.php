<?php
class Solution {
    function findMaxAverage($nums, $k) {
        $now_number=0;
        if(count($nums)==1) return $nums[0];
        for($i=0;$i<$k;$i++)
            $now_number+=$nums[$i];
        $best=$now_number;
        for($j=$k;$j<count($nums);$j++)
        {
            $now_number+=$nums[$j]-$nums[$j-$k];
            $best=max($best,$now_number);
        }
        return $best/$k;
    }
}