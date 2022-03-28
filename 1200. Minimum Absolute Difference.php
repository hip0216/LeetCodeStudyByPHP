<?php
class Solution {

/**
 * @param Integer[] $arr
 * @return Integer[][]
 */
function minimumAbsDifference($arr) {
    $ans=[];
    $min;
    sort($arr);
    for($i=0;$i<count($arr)-1;$i++){
        $distinct=$arr[$i+1]-$arr[$i];
        $ans[$distinct][] = [$arr[$i],$arr[$i+1]];
        $min=($min)?min($min,$distinct):$distinct;
    }
    return $ans[$min];
}
}
?>