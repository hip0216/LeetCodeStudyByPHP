<?php
class Solution {
    function lengthOfLongestSubstring($s) {
        $str_array=array();
        $max_str=0;
        for($i=0;$i<strlen($s);$i++)
        {
            $now_str=substr($s,$i,1);
            if (in_array($now_str,$str_array))
                {
                $reapt_str_index=array_search($now_str,$str_array);
                $str_array=array_slice($str_array,$reapt_str_index+1);
                }
            array_push($str_array,$now_str);
            if (count($str_array)>$max_str)
                $max_str=count($str_array);
        }
        return $max_str;
    }
}