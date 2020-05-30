<?php
class Solution {
    function intersect($nums1, $nums2) {
        $ans=[];
        $dic=[];
        foreach($nums2 as $value)
            (isset($dic[$value]))?$dic[$value]++:$dic[$value]++;
        foreach($nums1 as $value)
            (!empty($dic[$value]))?(array_push($ans,$value)).($dic[$value]--):null;
        return $ans;
    }
}