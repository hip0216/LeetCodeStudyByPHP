<?php
class Solution {
    function findDuplicate($nums) {
        sort($nums);
        for($i=0;$i<count($nums);$i++)
            if($nums[$i]==$nums[$i+1]) return $nums[$i];
            
    }
}