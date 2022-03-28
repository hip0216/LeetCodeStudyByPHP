class Solution {
<?php
/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target) {
    $left=0;
    $right=count($nums)-1;
    while($left<=$right){
        $median=floor($left+(($right-$left)/2));
        if($nums[$median]<$target){
            $left=$median+1;
        }
        elseif($nums[$median]>$target){
            $right=$median-1;
        }
        else{
            return $median;
        }
    }
    return -1;
}
}
?>