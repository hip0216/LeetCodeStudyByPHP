<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return String[]
     */
    function summaryRanges($nums) {
        $arr=[];
        for($i=0;$i<count($nums);$i++){
            $start=$nums[$i];
            while($i+1<count($nums) && $nums[$i]+1==$nums[$i+1]) $i++;
            if($start!=$nums[$i]){
                $arr[]=$start.'->'.$nums[$i];
            }else{
                $arr[]="".$start;
            }
        }
        return $arr;
        
    }
}
?>