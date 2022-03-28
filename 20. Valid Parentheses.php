<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $right=[')' => '(','}' => '{',']' => '['];
        $stack=[];
        for($i=0;$i<strlen($s);$i++){
            if(isset($right[$s[$i]])){
                if(count($stack)==0 || $right[$s[$i]]!=end($stack)){
                    return false;
                }
                array_pop($stack);
            }else{
                $stack[]=$s[$i];
            }
        }
        return count($stack)==0;
    }
}
?>