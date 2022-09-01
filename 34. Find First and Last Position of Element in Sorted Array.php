<?php
class Solution {

/**
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer[]
 */
function searchRange($nums, $target) {
    if(count($nums)==0) return [-1,-1];
    $i=0;
    $j=count($nums)-1;
    $iStatus=true;
    $jStatus=true;
    while($i<=$j && ($iStatus || $jStatus)){
        if($iStatus){
            if($nums[$i]==$target){
                $iStatus=false;
            }else{
                $i++;
            }
        }
        if($jStatus){
            if($nums[$j]==$target){
                $jStatus=false;
            }else{
                $j--;
            }
        }
    }
    return ($iStatus && $jStatus)?[-1,-1]:[$i,$j];
}
}
?>