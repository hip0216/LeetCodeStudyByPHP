<?php
class Solution {
    function maxArea($height) {
        $left=0;
        $right=count($height)-1;
        $max_area=0;
        while($left<$right)
        {
            $area=min($height[$left],$height[$right])*($right-$left);
            ($area>$max_area)?$max_area=$area:null;
            ($height[$left]>$height[$right])?$right--:$left++;
        }
        return $max_area;
    }
}