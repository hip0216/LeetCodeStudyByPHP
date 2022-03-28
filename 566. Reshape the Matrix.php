<?php
class Solution {

    /**
     * @param Integer[][] $mat
     * @param Integer $r
     * @param Integer $c
     * @return Integer[][]
     */
    function matrixReshape($mat, $r, $c) {
        $row=count($mat);
        $col=count($mat[0]);
        if($row*$col != $r*$c){
            return $mat;
        }
        $newrow=0;
        $newcol=0;
        $newarr=[];
        for($i=0;$i<$row;$i++){
            for($j=0;$j<$col;$j++){
                if($newrow<$r && $newcol<$c){
                    $newarr[$newrow][$newcol]=$mat[$i][$j];
                }
                $newcol++;
                if($newrow<$r && $newcol==$c){
                    $newrow++;
                    $newcol=0;
                }
            }
        }
        return $newarr;
    }
}
?>