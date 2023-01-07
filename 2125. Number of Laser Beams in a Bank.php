<?php
class Solution {

    /**
     * @param String[] $bank
     * @return Integer
     */
    function numberOfBeams($bank){
        $currentCount=0;
        $nowCount=0;
        $ans=0;
        for($i=0;$i<count($bank);$i++){
            $bank[$i]=str_replace('0','',$bank[$i]);
            $nowCount=strlen($bank[$i]);
            $ans+=$nowCount*$currentCount;
            $currentCount=($nowCount>0)?$nowCount:$currentCount;
        }
        return $ans;
    }
}
?>