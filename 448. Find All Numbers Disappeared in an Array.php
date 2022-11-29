<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function findDisappearedNumbers($nums) {
        $hash=range(1,count($nums));
        for($i=0;$i<count($nums);$i++){
            unset($hash[$nums[$i]-1]);
        }
        return $hash;
    }
}
?>