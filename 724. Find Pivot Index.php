<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function pivotIndex($nums) {
        $sum=array_sum($nums);
        $ansSum=0;
        for($i=0;$i<count($nums);$i++){
            if($ansSum==$sum-$ansSum-$nums[$i]){
                return $i;
            }
            $ansSum+=$nums[$i];
        }
        return -1;
    }
}