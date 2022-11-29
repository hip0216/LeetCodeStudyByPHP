<?php
class NumMatrix {
    /**
     * @param Integer[][] $matrix
     */
    function __construct($matrix) {
        $this->dp=[];
        for($i=0;$i<count($matrix);$i++){
            for($j=0;$j<count($matrix[$i]);$j++){
                $this->dp[$i+1][$j+1]=$matrix[$i][$j];
                $this->dp[$i+1][$j+1]+=$this->dp[$i+1][$j];    
                $this->dp[$i+1][$j+1]+=$this->dp[$i][$j+1]; 
                $this->dp[$i+1][$j+1]-=$this->dp[$i][$j]; 
            }   
        }
    }
  
    /**
     * @param Integer $row1
     * @param Integer $col1
     * @param Integer $row2
     * @param Integer $col2
     * @return Integer
     */
    function sumRegion($row1, $col1, $row2, $col2) {
        return $this->dp[$row2+1][$col2+1]
               -$this->dp[$row1][$col2+1]
               -$this->dp[$row2+1][$col1]
               +$this->dp[$row1][$col1]
        ;
    }
}

/**
 * Your NumMatrix object will be instantiated and called as such:
 * $obj = NumMatrix($matrix);
 * $ret_1 = $obj->sumRegion($row1, $col1, $row2, $col2);
 */
?>