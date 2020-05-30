<?php
class Solution {
    function canWinNim($n) {
        return ($n%4!=0 or $n<4)?true:false;
    }
}