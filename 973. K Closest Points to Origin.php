<?php
class Solution {
    function partiction(&$points,$down,$up){
        $mid=$this->distance($points[$up]);
        $nowIndex=$down-1;
        for($i=$down;$i<$up;$i++){
            $nowVal=$this->distance($points[$i]);
            if($nowVal<$mid){
                $nowIndex++;
                [$points[$nowIndex],$points[$i]]=[$points[$i],$points[$nowIndex]];
            }
        }
        [$points[$up],$points[$nowIndex+1]]=[$points[$nowIndex+1],$points[$up]];
        return $nowIndex+1;
    }
    function distance($coordinate){
        return pow($coordinate[0],2)+pow($coordinate[1],2);
    }
    function sort(&$points,$maxTry,$i,$j,$k){
        if($i<$j && $maxTry <250){
            $maxTry++;
            $mid=$this->partiction($points,$i,$j);
            if(($mid-$i+1)==$k){
                null;
            }else if(($mid-$i+1)<$k){
                $this->sort($points,$maxTry,$mid+1,$j,$k-($mid-$i+1));
            }else{
                $this->sort($points,$maxTry,$i,$mid-1,$k);
            }
        }
    }
    /**
     * @param Integer[][] $points
     * @param Integer $k
     * @return Integer[][]
     */
    function kClosest($points, $k) {
        $this->sort($points,0,0,count($points)-1,$k);
        return array_splice($points,0,$k);
    }
}
?>