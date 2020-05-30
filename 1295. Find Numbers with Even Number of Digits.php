<?php
class Solution {
    function findNumbers($nums) {
        $count_even=0;
        for($i=0;$i<count($nums);$i++)
            (strlen((string)$nums[$i])%2==0)?$count_even++:null;
        return $count_even;
    }   
}