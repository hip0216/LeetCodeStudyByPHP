<?php
class Solution {
    function judgeSquareSum($c) {
        for($i=0;$i*$i<=$c;$i++)
            if((sqrt($c-$i*$i)==floor(sqrt($c-$i*$i)))) return true;
        return false;
    }
}