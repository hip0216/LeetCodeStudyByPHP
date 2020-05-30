<?php
class Solution {
    function matrixReshape($nums, $r, $c) {
        $ans=[];
        $row=0;
        $col=0;
        if(count($nums)==0 or $r*$c!=count($nums)*count($nums[0])) return $nums;
        for($i=0;$i<count($nums);$i++)
        {
            for($j=0;$j<count($nums[0]);$j++)
            {
               $ans[$row][$col]=$nums[$i][$j];
               $col++;
               ($col==$c)?($row++).($col=0):null;
            }
        }
        return $ans;
    }
}