<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindrome($s) {
        $hash=[];
        $pair=0;
        for($i=0;$i<strlen($s);$i++){
            if(isset($hash[$s[$i]])){
                $pair++;
                unset($hash[$s[$i]]);
            }else{
                $hash[$s[$i]]=1;
            }
        }
        return $pair*2+((count($hash))?1:0);
    }
}
?>