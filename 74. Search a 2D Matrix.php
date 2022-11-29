<?php
class Solution {

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target) {
        $m=count($matrix);
        $n=count($matrix[0]);
        $i=0;
        $j=$n-1;
        while($i<$m && $j>=0){
            if($matrix[$i][$j]==$target){
                return true;
            }else if($matrix[$i][$j]>$target){
                $j--;
            }else{
                $i++;
            }
        }
        return false;
    }
}
?>