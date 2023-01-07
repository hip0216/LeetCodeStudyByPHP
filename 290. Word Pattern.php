<?php
class Solution {

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s) {
        $sArr=explode(' ',$s);
        if(strlen($pattern)!=count($sArr)) return false;
        $hashPat=[];
        $hashS=[];
        for($i=0;$i<count($sArr);$i++){
            if(!isset($hashPat[$pattern[$i]])){
                $hashPat[$pattern[$i]]=$sArr[$i];
            }
            if(!isset($hashS[$sArr[$i]])){
                $hashS[$sArr[$i]]=$pattern[$i];
            }
            if($hashPat[$pattern[$i]]!=$sArr[$i] || $hashS[$sArr[$i]]!=$pattern[$i]){
                return false;
            }
        }
        return true;
    }
}
?>