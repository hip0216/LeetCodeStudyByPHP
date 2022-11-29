<?php
class Solution {

    /**
     * @param String[] $names
     * @param Integer[] $heights
     * @return String[]
     */
    function sortPeople($names, $heights) {
        $hash=[];
        for($i=0;$i<count($heights);$i++){
            $hash[$heights[$i]]=$names[$i];
        }
        krsort($hash);
        return $hash;
    }
}
?>