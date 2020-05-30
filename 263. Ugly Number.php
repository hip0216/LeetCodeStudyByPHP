<?php
class Solution {
    function isUgly($num) {
      if($num<=0) return false;
      if($num==1) return true;
      $i=2;
      while($num !=1 and $i<=5)
          ($num%$i!=0)?$i++:$num/=$i;
      return $num==1;
    }
}