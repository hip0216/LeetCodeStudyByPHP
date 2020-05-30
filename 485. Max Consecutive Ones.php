<?php
class Solution {
    function findMaxConsecutiveOnes($nums) {
        $count_one=0;
        $max_count=0;
        for($i=0;$i<count($nums);$i++)
        {
            ($nums[$i]==1)?$count_one++:$count_one=0;
            ($count_one>$max_count)?$max_count=$count_one:null;
        }
        return $max_count;
    }
}