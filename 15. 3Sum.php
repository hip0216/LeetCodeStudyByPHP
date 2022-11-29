<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $len=count($nums);
        sort($nums);
        $ans=[];
        for($i=0;$i<$len;$i++){
            if($i && $nums[$i]==$nums[$i-1]){
                continue;
            }  
            $j=$i+1;
            $k=$len-1;
            while($j<$k){
                $sum=$nums[$j]+$nums[$k];
                if($sum>-$nums[$i]){
                    $k--;
                }else if($sum<-$nums[$i]){
                    $j++;
                }else{
                    $ans[]=[$nums[$i],$nums[$j],$nums[$k]];
                    while($j<$k && $nums[$j]==$nums[$j+1])$j++;
                    while($j<$k && $nums[$k]==$nums[$k-1])$k--;
                    $j++;$k--;
                }
            }
        }
        return $ans;
    }
}
?>