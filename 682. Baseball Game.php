<?php
class Solution {
    function calPoints($ops) {
        $ago=[];
        for($i=0;$i<count($ops);$i++)
        {
            if ($ops[$i]=="+")
                array_push($ago,$ago[count($ago)-1]+$ago[count($ago)-2]);
            else if($ops[$i]=="D")
                array_push($ago,$ago[count($ago)-1]*2);
            else if($ops[$i]=="C")
                array_pop($ago);
            else
                array_push($ago,$ops[$i]);
        }
        return array_sum($ago);
    }
}