<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    function numSubarrayProductLessThanK($nums, $k) {
        if($k<=1)return 0;
        $ans=0;$num=1;$left=0;
        for($right=0;$right<count($nums);$right++){
            $num*=$nums[$right];
            while($k<=$num)$num/=$nums[$left++];
            $ans+=$right-$left+1;
        }
        return $ans;
    }
}
?>