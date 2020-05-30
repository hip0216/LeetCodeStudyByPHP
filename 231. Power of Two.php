<?php
class Solution {
    function isPowerOfTwo($n) {
        while($n%2==0 and $n!=0)
            $n/=2;
        return ($n==1)?true:false;
    }
}