<?php
class Solution {

    function rob($nums) {
        if (count($nums)==0) return 0;
        if (count($nums)==1) return $nums[0];
        $dp=[$nums[0],$nums[1]];
        for($i=2;$i<count($nums);$i++)
            $dp[$i]=max(array_slice($dp,0,$i-1))+$nums[$i];
        return max($dp[count($dp)-1],$dp[count($dp)-2]);
    }
}