<?php
class Solution {
    function isPerfectSquare($num) {
        $n=1;
        while($n*$n<=$num)
        {
            if($n*$n==$num) return true;
            $n+=1;
        }
        return false;
    }
}