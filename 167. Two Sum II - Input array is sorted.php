<?php
class Solution {
    function twoSum($numbers, $target) {
        $left_point=0;
        $right_point=count($numbers)-1;
        while($left_point!=$right_point)
        {
            $sum_number=$numbers[$left_point]+$numbers[$right_point];
            if ($target==$sum_number)
                return array($left_point+1,$right_point+1);
            else
                ($sum_number>$target)?$right_point-=1:$left_point+=1;
        }
    }
}