<?php
class Solution {

    function get_ans($nums,$start,$end){
        $ans1=0;
        $ans2=0;
        for($i=$start;$i<$end;$i++){
            $new = max($ans1 + $nums[$i], $ans2);
            $ans1 = $ans2;
            $ans2 = $new;
        }
        return max($ans1,$ans2);
    }
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        if(count($nums)<=3){
            return max($nums);
        }
        
        return max($this->get_ans($nums,0,count($nums)-1),$this->get_ans($nums,1,count($nums)));
    }
}
?>