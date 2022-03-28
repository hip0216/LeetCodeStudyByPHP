<?php
class Solution {

/**
 * @param Integer $numRows
 * @return Integer[][]
 */
function generate($numRows) {
    $ans=[[1]];
    for($i=2;$i<=$numRows;$i++){
        for($j=0;$j<$i;$j++){
            if($j==0 || $j+1==$i){
                $ans[$i][$j]=1;
            }
            else{
                $ans[$i][$j]=$ans[$i-1][$j-1]+$ans[$i-1][$j];
            }
        }
    }
    return $ans;
}
}
?>