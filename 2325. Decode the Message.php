<?php
class Solution {

    /**
     * @param String $key
     * @param String $message
     * @return String
     */
    function decodeMessage($key, $message) {
        $hash=[];
        $enWord=range('a','z');
        $wordTrim=0;
        for($i=0;$i<strlen($key);$i++){
            if($key[$i] !=" " && !isset($hash[$key[$i]])){
                $hash[$key[$i]]=$enWord[$wordTrim];
                $wordTrim++;
            }
        }
        for($j=0;$j<strlen($message);$j++){
            if($message[$j]!=" "){
                $message[$j]=$hash[$message[$j]];
            }
        }
        return $message;
    }
}
?>