<?php
class Solution {
    function dominantIndex($nums) {
        $max=max($nums);
        $check=true;
        for($i=0;$i<count($nums);$i++)
            ($max<$nums[$i]*2 and $max!=$nums[$i])?$check=false:null;
        return ($check)?array_search($max,$nums):-1;
    }
}