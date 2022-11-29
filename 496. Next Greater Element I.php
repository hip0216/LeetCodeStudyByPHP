<?php
class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Integer[]
     */
    function nextGreaterElement($nums1, $nums2) {
        $numIndex2=array_fill(1,count($nums2),0);
        $stack=[];
        $ans=[];
        for($i=0;$i<count($nums2);$i++){
            while($stack && $nums2[end($stack)]<$nums2[$i]){
                $nowIndex=array_pop($stack);
                $numIndex2[$nums2[$nowIndex]]=$nums2[$i];
            }
            $stack[]=$i;
        }
        for($j=0;$j<count($nums1);$j++){
            $ans[]=($numIndex2[$nums1[$j]]>0)?$numIndex2[$nums1[$j]]:-1;   
        }
        return $ans;
    }
}
?>