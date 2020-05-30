<?php
class Solution {
    function sortArrayByParity($A) {
        $i=0;$j=count($A)-1;
        while($i<$j)
        {
            if($A[$i]%2>$A[$j]%2) [$A[$i],$A[$j]]=[$A[$j],$A[$i]];
            if($A[$i]%2==0) $i++;
            if($A[$j]%2==1) $j--;
        }
        return $A;  
    }
}