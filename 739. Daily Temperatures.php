<?php
class Solution {

    /**
     * @param Integer[] $temperatures
     * @return Integer[]
     */
    function dailyTemperatures($temperatures) {
        $ans=array_fill(0,count($temperatures),0);
        $stack=[];
        for($i=0;$i<count($temperatures);$i++){
            while($stack && $temperatures[end($stack)]<$temperatures[$i]){
                $nowIndex=array_pop($stack);
                $ans[$nowIndex]=$i-$nowIndex;
            }
            $stack[]=$i;
        }
        return $ans;
    }
    
}
?>