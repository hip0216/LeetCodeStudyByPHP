<?php
class Solution {

/**
 * @param Integer[][] $matrix
 * @return Boolean
 */
function isToeplitzMatrix($matrix) {
    $n=count($matrix)-1;
    $m=count($matrix[0])-1;
    for($i=0;$i<$m;$i++){
        for($j=0;$j<$n;$j++){
            if($matrix[$j][$i] != $matrix[$j+1][$i+1]){
                return false;
            }
        }
    }
    return true;
}
}
?>