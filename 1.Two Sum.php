<?php
class Solution {
    function twoSum($nums, $target) {
        $dict=array();
        for($i=0;$i<=count($nums);$i++)
        {
        if(isset($dict[$nums[$i]])){
            return array($dict[$nums[$i]],$i);
            }
        else{
           $dict[$target-$nums[$i]]=$i; 
            }
        }
    }
}