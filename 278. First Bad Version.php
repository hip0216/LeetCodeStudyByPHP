<?php
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function checkBad($left,$right){
        if($left<$right){
            $middle=floor($left+($right-$left)/2);
            if($this->isBadVersion($middle)){
                return $this->checkBad($left,$middle);
            }else{
                return $this->checkBad($middle+1,$right);
            }
        }else{
            return $left;
        }
    }
    function firstBadVersion($n) {
        $left=1;
        $right=$n;
        return $this->checkBad($left,$right);
    }
}
?>