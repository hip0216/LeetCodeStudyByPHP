<?php
class Solution {
    function missingNumber($nums) {
        for($i=0;$i<=count($nums);$i++)
            if(!in_array($i,$nums)) return $i;
    }
}