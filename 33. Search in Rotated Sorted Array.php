<?php
class Solution {
    function search($nums, $target) {
        for($i=0;$i<count($nums);$i++)
            ($nums[$i]==$target)?$index=$i:null;
        return (isset($index))?$index:-1;
    }
}