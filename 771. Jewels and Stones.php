<?php
class Solution {
    function numJewelsInStones($J, $S) {
        $check_j=[];
        $nums_j=0;
        for($i=0;$i<strlen($S);$i++)
        {
            $now_S=substr($S,$i,1);
            (array_key_exists($now_S,$check_j))?$check_j[$now_S]++:$check_j[$now_S]=1;
        }
        for($j=0;$j<strlen($J);$j++)
        {
            $now_J=substr($J,$j,1);
            (array_key_exists($now_J,$check_j))?$nums_j+=$check_j[$now_J]:null;
        }
        return $nums_j;
    }
}