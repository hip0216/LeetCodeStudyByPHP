<?php
class Solution {

    function containsDuplicate($nums) {
        if(count($nums)==1)
            return false;
        $ago_array=[];
        foreach($nums as $number)
        {
            if (in_array($number,$ago_array))
                return true;
            else
                array_push($ago_array,$number);
        }
        return false;
    }
}