<?php
class Solution {

/**
 * @param String $s
 * @return Boolean
 */
function repeatedSubstringPattern($s) {
    $i=0;
    $j=-1;
    $priex=[-1];
    while($i<strlen($s)){
        if($j == -1 || $s[$j]==$s[$i]){
            $i++;
            $j++;
            $priex[$i]=$j;
        }else{
            $j=$priex[$j];
        }
    }
    $countPriex=count($priex)-1;
    $end=$priex[$countPriex];
    return $end && $end % ($countPriex-$end) == 0;
    
}
}
?>