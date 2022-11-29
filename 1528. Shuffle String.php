<?php
class Solution {

    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
        $ans=$s;
        for($i=0;$i<strlen($s);$i++){
            $ans[$indices[$i]]=$s[$i];
        }
        return $ans;
    }
}
?>