<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function deleteGreatestValue($grid) {
        $ans=0;
        for($i=0;$i<count($grid);$i++){
            rsort($grid[$i]);
        }
        for($j=0;$j<count($grid[0]);$j++){
            $now=[];
            for($i=0;$i<count($grid);$i++){
                $now[]=$grid[$i][$j];
            }
            $ans+=max($now);
        }
        return $ans;
    }
}
?>