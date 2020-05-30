<?php
class Solution {
    function subtractProductAndSum($n) {
        $n=(string)$n;$product=1;$sum=0;
        for($i=0;$i<strlen($n);$i++)
        {
            $product*=(int)$n[$i]; 
            $sum+=(int)$n[$i];
        }
        return  $product-$sum;
    }
}