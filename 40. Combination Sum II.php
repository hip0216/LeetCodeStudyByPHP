<?php
class Solution {

    /**
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function dfs($candidates,$target,&$ans,$nowIndex=0,$nowItem=[],$sum=0){
        if($sum>$target) return ;
        if($sum==$target){
            $ans[]=$nowItem;
            return ;
        }
        for($i=$nowIndex;$i<count($candidates);$i++){
            if($i>$nowIndex && $candidates[$i]==$candidates[$i-1]){
                continue;
            }
            $this->dfs($candidates,$target,$ans,$i+1,array_merge($nowItem,[$candidates[$i]]),$sum+$candidates[$i]);
        }
    }
    function combinationSum2($candidates, $target) {
        $ans=[];
        sort($candidates);
        $this->dfs($candidates,$target,$ans);
        return $ans;
    }
}
?>