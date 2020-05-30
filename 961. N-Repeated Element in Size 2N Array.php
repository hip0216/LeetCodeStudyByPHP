<?php
class Solution {
    function repeatedNTimes($A) {
        $A=array_count_values($A);
        return array_search(max($A),$A);
    }
}