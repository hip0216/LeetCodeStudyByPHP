<?php
class Solution {
    function findUnsortedSubarray($nums) {
        $copy_nums=$nums;
        sort($nums);
        $start=count($nums);$end=0;
        for($i=0;$i<count($nums);$i++)
            ($nums[$i]!=$copy_nums[$i])?($end=max($end,$i)).($start=min($start,$i)):null;
        return ($end-$start>=0)?$end-$start+1:0;
    }
}