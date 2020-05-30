<?php
class Solution {
    function lemonadeChange($bills) {
        $five=0;
        $ten=0;
        for($i=0;$i<count($bills);$i++)
        {
            if ($bills[$i]==5) $five++;
            else if($bills[$i]==10 and $five!=0) {$five--;$ten++;}
            else if($bills[$i]==20 and $five!=0 and $ten!=0){$five--;$ten--;}
            else if ($bills[$i]==20 and $five>=3)$five-=3;
            else return false;
        }
        return true;    
    }
}