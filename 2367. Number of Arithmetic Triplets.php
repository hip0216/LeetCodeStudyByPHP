<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $diff
     * @return Integer
     */
    function arithmeticTriplets($nums, $diff) {
        $hash=[];
        $ans=0;
        for($i=0;$i<count($nums);$i++){    
            $hash[$nums[$i]]=true;
            if(isset($hash[$nums[$i]-$diff]) && isset($hash[$nums[$i]-$diff*2])){
                $ans++;
            }
        }
        return $ans;
    }
}
?>