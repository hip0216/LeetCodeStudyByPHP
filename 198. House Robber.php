<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        for($i=2;$i<count($nums);$i++){
            $nums[$i]+=max($nums[$i-2],$nums[$i-3]);
        }
        return max($nums[$i-2],$nums[$i-1]);
    }
}
?>