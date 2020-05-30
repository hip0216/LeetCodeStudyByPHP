<?php
class Solution {
    function longestPalindrome($s) {
        $ans=0;
        $nums=str_split($s);
        $nums=array_count_values($nums);
        foreach($nums as $values)
        {
            $ans+=floor($values/2)*2;
            ($ans%2==0 and $values %2==1)?$ans++:null;
        }
        return $ans;
    }
}