<?php
class Solution {
    function removeElement(&$nums, $val) {
        while(in_array($val,$nums))
            unset($nums[array_search($val,$nums)]);
    }
}