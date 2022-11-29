<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSegments($s) {
        $count=0;
        for($i=0;$i<strlen($s);$i++){
            if(($i==0 || $s[$i-1]==' ') && $s[$i]!=' '){
                $count++;
            }
        }
        return $count;
    }
}
?>