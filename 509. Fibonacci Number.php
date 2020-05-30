<?php
class Solution {
    function fib($N) {
        if($N==0) return 0;
        $fib_array=[0,1];
        for($i=2;$i<=$N;$i++)
            $fib_array[$i]=$fib_array[$i-1]+$fib_array[$i-2];
        return $fib_array[count($fib_array)-1];
    }
}