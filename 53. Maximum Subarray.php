<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $dp=array();
        array_push($dp,$nums[0]);
        $max_sum=0;
        for($i=1;$i<count($nums);$i++)
        {
            $next=max($nums[$i],$nums[$i]+$dp[$i-1]);
            array_push($dp,$next);
        }
        return max($dp);
}
}