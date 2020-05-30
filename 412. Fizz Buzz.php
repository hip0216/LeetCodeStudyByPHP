<?php
class Solution {
    function fizzBuzz($n) {
        $ans_array=[];
        for($i=1;$i<=$n;$i++)
        {
            if($i%15==0) $str="FizzBuzz";
            else if($i%5==0) $str="Buzz";
            else if($i%3==0) $str="Fizz";
            else $str=(string)$i;
            array_push($ans_array,$str);
        }
        return $ans_array;
        
    }
}