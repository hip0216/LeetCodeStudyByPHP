<?php
class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {
        $hash=[];
        for($i=0;$i<strlen($ransomNote);$i++){
            if(isset($hash[$ransomNote[$i]])){
                $hash[$ransomNote[$i]]++;
            }
            else{
                $hash[$ransomNote[$i]]=1;
            }
        }
        for($j=0;$j<strlen($magazine);$j++){
            if(isset($hash[$magazine[$j]])){
                $hash[$magazine[$j]]--;
                if($hash[$magazine[$j]]<0){
                    return false;
                }
                if($hash[$magazine[$j]]==0){
                    unset($hash[$magazine[$j]]);
                }
            }
        }
        return count($hash)?false:true;
    }
}
?>