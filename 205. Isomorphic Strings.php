<?php
class Solution {
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        $sisomorphic=[];
        $tisomorphic=[];
        for($i=0;$i<strlen($s);$i++){
            if(isset($sisomorphic[$s[$i]]) || isset($tisomorphic[$t[$i]])){
                if($sisomorphic[$s[$i]]!=$t[$i] && $tisomorphic[$t[$i]]!=$s[$i]){
                    return false;
                }
            }
            else{
                $sisomorphic[$s[$i]]=$t[$i];
                $tisomorphic[$t[$i]]=$s[$i];
            }
        }
        return true;
    }
}
?>