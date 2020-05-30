<?php
class Solution {
    function findLUSlength($a, $b) {
        return ($a==$b)?-1:max(strlen($a),strlen($b));
    }
}