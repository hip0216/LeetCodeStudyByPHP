<?php
class Solution {
    function plusOne($digits) {
        $check=0;
        for($i=count($digits)-1;$i>=0;$i--)
        {
            if ($digits[$i]!=9)
            {
                $digits[$i]+=1;
                $check=1;
                break;
            }
            else
            {
                $digits[$i]=0;
                if(!isset($digits[$i-1])) array_unshift($digits,1);
            }
        }
        return $digits;
    }
}