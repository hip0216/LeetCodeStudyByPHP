<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t) {
        $hash = [];
        for($i=0;$i<strlen($s);$i++){
            if(isset($hash[$s[$i]])){
                $hash[$s[$i]]++;
            }
            else{
                $hash[$s[$i]]=1;
            }
        }
        for($j=0;$j<strlen($t);$j++){
            if(isset($hash[$t[$j]])){
                $hash[$t[$j]]--;
                if($hash[$t[$j]]==0){
                    unset($hash[$t[$j]]);
                }
            }
            else{
                $hash[$t[$j]]++;
            }
        }
        
        return (count($hash))?false:true;
    }
}
?>