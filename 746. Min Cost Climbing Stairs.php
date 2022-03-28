<?php
class Solution {
    /**
     * @param Integer[] $cost
     * @return Integer
     */
    function minCostClimbingStairs($cost) {
        for($i=2;$i<count($cost);$i++){
            $cost[$i]+=min($cost[$i-2],$cost[$i-1]);
        }
        return min($cost[$i-2],$cost[$i-1]);
    }
}
?>