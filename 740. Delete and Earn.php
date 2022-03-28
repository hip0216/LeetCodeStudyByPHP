<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function deleteAndEarn($nums) {
        $nums_hash=[];
        $nums_len=count($nums);
        $now_sum=$ago_sum=0;
        $ago_num=-1;
        for($i=0;$i<$nums_len;$i++){
            if(isset($nums_hash[$nums[$i]])){
                $nums_hash[$nums[$i]]++;
            }
            else{
               $nums_hash[$nums[$i]]=1;
            }
        }
        ksort($nums_hash);
        foreach($nums_hash as $num_value=>$num_count){
            $max= max($now_sum,$ago_sum);
            if($num_value-1 == $ago_num){
                $this_num=$ago_sum;//相鄰只能加入曾經最大的加總
            }else{
                $this_num=$max;//不相鄰才可加入當前最大的加總
            }
            [$now_sum,$ago_sum]=[($num_count*$num_value)+$this_num,$max];
            $ago_num=$num_value;
        }
        return max($now_sum,$ago_sum);
    }
}
?>