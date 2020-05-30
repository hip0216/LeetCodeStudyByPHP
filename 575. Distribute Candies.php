<?php
class Solution {
    function distributeCandies($candies) {
        sort($candies);
        $count_candy=1;
        $i=1;
        while($i<count($candies) and $count_candy<count($candies)/2)
        {
            ($candies[$i]>$candies[$i-1])?$count_candy++:null;
            $i++;
        }
        return $count_candy;
    }
}