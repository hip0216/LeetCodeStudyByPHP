<?php
class Solution {

    /**
     * @param Integer[] $tasks
     * @return Integer
     */
    function minimumRounds($tasks) {
        $tasks=array_count_values($tasks);
        $ans=0;
        foreach($tasks as $value){
            if($value==1){
                return -1;
                break;
            }else{
                $ans+=ceil($value/3);
            }
        }
        return $ans;
    }
}
?>