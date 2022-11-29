<?php
class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer[][]
     */
    function largestLocal($grid) {
        $ans=[];
        for($i=0;$i<count($grid)-2;$i++){
           for($j=0;$j<count($grid)-2;$j++){
               for($iIn = $i;$iIn<$i+3;$iIn++){
                    for($jIn = $j;$jIn<$j+3;$jIn++){
                        $ans[$i][$j]=max($ans[$i][$j],$grid[$iIn][$jIn]);
                    }   
               }
           } 
        }
        return $ans;
    }
}
?>