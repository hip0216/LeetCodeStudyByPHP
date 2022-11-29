<?php
class Solution {
    function dfs(&$isConnected,$i){
        for($j=0;$j<$this->len;$j++){
            if($isConnected[$i][$j]==1){
                $isConnected[$i][$j]=$isConnected[$j][$i]=0;
                $this->dfs($isConnected,$j);
            }
        }
    }
    /**
     * @param Integer[][] $isConnected
     * @return Integer
     */
    function findCircleNum($isConnected) {
        $ans=0;
        $this->len=count($isConnected);
        for($i=0;$i<$this->len;$i++){
            if($isConnected[$i][$i]==1){
                $this->dfs($isConnected,$i);
                $ans++;
            }    
        }
        return $ans;
    }
}

?>