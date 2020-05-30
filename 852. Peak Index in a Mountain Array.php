<?php
class Solution {
    function peakIndexInMountainArray($A) {
        $i=0;
        while($A[$i]<$A[$i+1])$i++;
        return $i;   
    }
}