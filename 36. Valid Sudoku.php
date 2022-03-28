<?php
class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $row=[];
        $col=[];
        $patch=[];
        $numsi=0;
        $status=true;
        for($i=0;$i<count($board);$i++){
            for($j=0;$j<count($board[$i]);$j++){
                if(is_numeric($board[$i][$j])){
                    $patchstr=ceil(($i+1)/3).'&'.ceil(($j+1)/3);
                    $status=(isset($patch[$patchstr][$board[$i][$j]]) || !$status)?false:true;
                    $status=(isset($row[$board[$i][$j]]) || !$status)?false:true;
                    $status=(isset($col[$j][$board[$i][$j]]) || !$status)?false:true;
                    $patch[$patchstr][$board[$i][$j]]=true;
                    $row[$board[$i][$j]]=true;
                    $col[$j][$board[$i][$j]]=true;
                }
                if(!$status){
                    break;
                }
            }
            if(!$status){
                break;
            }
            $row=[];
            
        }
        return $status;
    }
}
?>