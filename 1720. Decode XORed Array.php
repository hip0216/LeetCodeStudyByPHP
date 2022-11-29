<?php
class Solution {

    /**
     * @param Integer[] $encoded
     * @param Integer $first
     * @return Integer[]
     */
    function decode($encoded, $first) {
        $ans=[$first];
        for($i=0;$i<count($encoded);++$i){
            $ans[$i+1]=$encoded[$i]^$ans[$i];
        }
        return $ans;
    }
}
?>