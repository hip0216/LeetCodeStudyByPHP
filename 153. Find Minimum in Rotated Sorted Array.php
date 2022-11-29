<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function findMin($nums) {
        $left=0;
        $right=count($nums)-1;
        while($left<$right){
            $mid=$left+floor(($right-$left)/2);
            if($nums[$mid]<$nums[$right]){
                $right=$mid;
            }else{
                $left=$mid+1;
            }
        }
        return $nums[$left];
    }
}
?>