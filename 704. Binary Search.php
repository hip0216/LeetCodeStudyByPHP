<?php
class Solution {
    function search($nums, $target) {
        $left=0;
        $right=count($nums)-1;
        while($left<=$right)
        {
            $midian=$left+floor(($right-$left)/2);
            if ($nums[$midian]==$target) return $midian;
            ($target<$nums[$midian])?$right=$midian-1:$left=$midian+1;
        }
        return -1;
    }
}