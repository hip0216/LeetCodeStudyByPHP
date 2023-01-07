<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function countPairs($nums, $k) {
        $ans=0;
        for($i=0;$i<count($nums);$i++){
            for($j=$i+1;$j<count($nums);$j++){
                if($nums[$i]==$nums[$j] && ($i*$j)%$k==0){
                    $ans++;
                }
            }              
        }
        return $ans;
    }
}
?>