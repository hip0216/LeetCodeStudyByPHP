<?php
class Solution {

    /**
     * @param Integer[][] $graph
     * @return Integer[][]
     */
    function dfs($graph,&$ans,$path=[0],$node=0){
        if($node==count($graph)-1){
            $ans[]=$path;
        }else{
            for($i=0;$i<count($graph[$node]);$i++){
                $path[]=$graph[$node][$i];
                $this->dfs($graph,$ans,$path,$graph[$node][$i]);
                array_pop($path);
            }
        }
    }
    function allPathsSourceTarget($graph) {
        $ans=[];
        $this->dfs($graph,$ans);
        return $ans;
    }
}
?>