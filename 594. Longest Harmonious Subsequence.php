<?php
class Solution {
    function findLHS($nums) {
        $ans=[];
        $ans_num=0;
        foreach($nums as $value)
            (isset($ans[$value]))?$ans[$value]++:$ans[$value]=1;
        foreach($ans as $key=>$value)
            if(isset($ans[$key+1])) $ans_num=max($ans_num,$ans[$key]+$ans[$key+1]);
        return $ans_num;
    }
}