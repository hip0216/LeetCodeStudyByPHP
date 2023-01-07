<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countAsterisks($s) {
        $count=0;
        $star=0;
        for($i=0;$i<strlen($s);$i++){
            if($s[$i]=='|'){
                    $star++;
            }
            if($star%2==0 && $s[$i]=='*'){
                $count++;
            }
        }
        return $count;
    }
   
}
?>