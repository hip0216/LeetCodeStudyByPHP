<?php
class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function canMakeArithmeticProgression($arr) {
        sort($arr);
        $nowNum=$arr[1]-$arr[0];
        for($i=1;$i<count($arr);$i++){
            if($arr[$i]-$arr[$i-1]!=$nowNum){
                return false;
            }
        }
        return true;
    }
}
?>