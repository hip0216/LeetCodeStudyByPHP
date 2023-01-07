<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numSquares($n) {
        $dp=[0];
        $sqrt=[];
        for($i=1;$i<sqrt($n)+1;$i++){
            $sqrt[]=$i*$i;
        }
        while(count($dp)<$n+1){
            $dpNow=999999;
            for($j=0;$j<count($sqrt);$j++){
                if(count($dp)<$sqrt[$j]) break;
                $dpNow = min($dpNow,$dp[count($dp)-$sqrt[$j]]+1);
            }
            $dp[]=$dpNow;
        }
        return $dp[$n];
    }
}
?>