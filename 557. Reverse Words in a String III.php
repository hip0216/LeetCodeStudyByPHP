<?php
class Solution {
    function reverseWords($s) {
        $array=explode(" ",$s);
        $str=strrev($array[0]);
        for($i=1;$i<count($array);$i++)
            $str.=" ".strrev($array[$i]);
        return $str;
    }
}