<?php
class Solution {
    function swap(&$a,&$b){
        $c=$a;
        $a=$b;
        $b=$c;
    }
    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        for($i=0;$i<floor(count($s)/2);$i++){
            $this->swap($s[$i],$s[count($s)-$i-1]);
        }
    }
}
?>