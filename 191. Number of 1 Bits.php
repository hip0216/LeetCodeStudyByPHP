<?php
class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count=0;
        while($n){
            if($n&1 == 1){
             $count++;
            }
            $n>>=1;
        }
        return $count;
    }
}
?>