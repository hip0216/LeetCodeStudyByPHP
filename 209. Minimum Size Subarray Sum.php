<?php
class Solution {

    /**
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums) {
        $len=count($nums);
        $ans=PHP_INT_MAX;
        $left=0;
        $sum=0;
        for($right=0;$right<$len;$right++){
            $sum+=$nums[$right];
            while($sum>=$target){
                $ans=min($ans,$right-$left+1);
                $sum-=$nums[$left++];
            }
        }
        return ($ans!=PHP_INT_MAX)?$ans:0;
    }
}
?>