<?php
class Solution {

    function addDigits($num) {
        while($num>=10)
            $num=floor($num/10)+$num%10;
        return $num;
    }
}