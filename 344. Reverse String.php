<?php
class Solution {
    function reverseString(&$s) {
       $i=0;
       $j=count($s)-1;
       while($i<$j)
       {
           $temp=$s[$i];
           $s[$i]=$s[$j];
           $s[$j]=$temp;
           $i++;
           $j--;
       }
    }
}