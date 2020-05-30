<?php
class Solution {

    function containsDuplicate($nums) {
        if(count($nums)==1)
            return false;
        sort($nums);
        for($i=0;$i<count($nums);$i++)
        {
            if($nums[$i]==$nums[$i+1])
                return true;
        }
        return false;
    }
}