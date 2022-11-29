<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestContinuousSubstring($s) {
        $j=1;$max=1;
        for($i=0;$i<strlen($s);$i++){
            if(ord($s[$i+1])-ord($s[$i])==1){
                $j++;
            }else{
                $max=max($max,$j);
                $j=1;
            }
        }
        return $max;
    }
}
?>