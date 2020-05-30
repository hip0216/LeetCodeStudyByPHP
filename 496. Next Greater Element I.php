<?php
class Solution {
    function nextGreaterElement($nums1, $nums2) {
        $ans=[];
        for($i=0;$i<count($nums1);$i++)
        {
            $greater=-1;
            for($j=array_search($nums1[$i],$nums2);$j<count($nums2);$j++)
            {
                if($nums2[$j]>$nums1[$i])
                {
                    $greater=$nums2[$j];
                    break;
                }
            }
            array_push($ans,$greater);
        }
        return $ans;
    }
}