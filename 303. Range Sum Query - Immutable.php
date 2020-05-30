<?php
class NumArray {
    function __construct($nums) {
        $this->nums=$nums;   
    }
    function sumRange($i, $j) {
        $ans=0;
        while($i<=$j)
        {
            $ans+=$this->nums[$i];
            $i++;
        }
        return $ans;
    }
}

