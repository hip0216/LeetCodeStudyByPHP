<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function nthUglyNumber($n) {
        $ans=[1];
        [$two,$three,$five]=[0,0,0];
        for($i=1;$i<$n;$i++){
            $ans[$i]=min($ans[$two]*2,$ans[$three]*3,$ans[$five]*5);
            ($ans[$i]==$ans[$two]*2)?$two++:null;
            ($ans[$i]==$ans[$three]*3)?$three++:null;
            ($ans[$i]==$ans[$five]*5)?$five++:null;
        }
        return $ans[$n-1];
    }
}
?>