<?php
class Solution {
    function getSum($a, $b) {
        $sum_array=[];
        array_push($sum_array,$a,$b);
        return array_sum($sum_array);
    }
}