<?php
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $count=0;
        for($i=strlen($s)-1;$i>=0;$i--){
           if($s[$i]!=" "){
               $count++;
           }else{
               if($count>0)break;
           }
        }
        return $count;
    }
}
?>