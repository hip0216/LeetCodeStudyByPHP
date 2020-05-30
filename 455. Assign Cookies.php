<?php
class Solution {
    function findContentChildren($g, $s) {
        sort($g);
        sort($s);
        $ans=0;
        $i=0;
        $j=0;
        while($i<count($g) and $j<count($s))
            ($g[$i]<=$s[$j])?($i++).($j++).($ans++):$j++;
        return $ans;
    }
}