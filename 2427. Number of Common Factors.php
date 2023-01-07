<?php
class Solution {

    /**
     * @param Integer $a
     * @param Integer $b
     * @return Integer
     */
    function commonFactors($a, $b) {
        $min=min($a,$b);
        $count=0;
        for($i=1;$i<=$min;$i++){
            if($a%$i==0 && $b%$i==0){
                $count++;
            }
        }
        return $count;
    }
}
?>