<?php
class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k) {
        $count=[];
        foreach(range('A','Z') as $word){
            $count[$word]=0;
        }
        $max=0;$start=0;
        for($end=0;$end<strlen($s);$end++){
            $max=max($max,++$count[$s[$end]]);
            if($max+$k<=$end-$start){
                $count[$s[$start++]]--;
            }
        }
        return strlen($s)-$start;
    }
}
?>