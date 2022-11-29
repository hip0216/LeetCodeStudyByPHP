<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function isMonotonic($nums) {
        $upp=true;
        $low=true;
        for($i=0;$i<count($nums)-1;$i++){
            if($nums[$i]<$nums[$i+1])
                $low=false;
            if($nums[$i]>$nums[$i+1])
                $upp=false;
            if(!$upp && !$low)
               return false;
        }
        return $upp||$low;
    }
}
?>