<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function nextGreaterElements($nums) {
        $stack=[];
        $lenNums=count($nums);
        $ans=[];
        for($i=2*$lenNums-1;$i>=0;$i--){
            $nowIndex=$i%$lenNums;
            while(count($stack)>0 && $nums[end($stack)]<=$nums[$nowIndex]){
                array_pop($stack);
            }
            $ans[$nowIndex]=count($stack)>0?$nums[end($stack)]:-1;
            $stack[]=$nowIndex;
        }
        return array_reverse($ans);
    }
}
?>