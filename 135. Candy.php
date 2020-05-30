<?php
class Solution {
    function candy($ratings) {
        $candy=[];
        for($i=0;$i<count($ratings);$i++)
            ($ratings[$i]>$ratings[$i-1])?($candy[$i]=$candy[$i-1]+1):($candy[$i]=1);
        for($i=count($ratings)-1;$i>=0;$i--)
            ($ratings[$i]>$ratings[$i+1])?($candy[$i]=max($candy[$i],$candy[$i+1]+1)):null;
        return array_sum($candy);
    }
}