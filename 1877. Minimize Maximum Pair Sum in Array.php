<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function minPairSum($nums) {
        sort($nums);
        $ans=0;
        $len=count($nums);
        for($i=0;$i<count($nums)/2;$i++){
            $ans=max($ans,$nums[$i]+$nums[$len-$i-1]);
        }
        return $ans;
    }
}
?>