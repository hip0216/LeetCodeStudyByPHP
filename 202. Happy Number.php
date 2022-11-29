<?php
class Solution {
    function setNext($num){
        $sum=0;
        $num=(string)$num;
        for($i=0;$i<strlen($num);$i++){
            $sum+=pow($num[$i],2);
        }
        return $sum;
    }
    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $next=$this->setNext($n);
        $now=$n;
        while($now!=$next && $next!=1){
            $now=$this->setNext($now);
            $next=$this->setNext($this->setNext($next));
        }
        return $next==1;
    }
}
?>