<?php
class Solution {

/**
 * @param String $s
 * @return Integer[]
 */
function partitionLabels($s) {
    $hash=[];
    $ans=[];
    $upper=0;
    $lower=0;
    for($i=0;$i<strlen($s);$i++){
        $hash[$s[$i]]=$i;
    }
    for($j=0;$j<strlen($s);$j++){
        if($hash[$s[$j]]>$upper){
            $upper=$hash[$s[$j]];
        }
        if($upper===$j){
            $ans[]=$upper-$lower+1;
            $lower=$upper+1;
            $upper=$lower;
        }
    }
    return $ans;
}
}
?>