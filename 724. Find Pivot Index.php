<?php
class Solution {
    function pivotIndex($nums) {
        $sum_nums=array_sum($nums);
        $left_sum=0;
        for($i=0;$i<count($nums);$i++)
        {
            if($left_sum==($sum_nums-$left_sum-$nums[$i]))return $i;
            $left_sum+=$nums[$i];
        }
        return -1;
    }
}