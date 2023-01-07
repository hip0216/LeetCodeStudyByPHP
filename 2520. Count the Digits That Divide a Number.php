<?php
class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function countDigits($num) {
        $ans=0;
        $stringNum=$num."";
        for($i=0;$i<strlen($num);$i++){
            if($num%$stringNum[$i]==0){
                    $hash[$stringNum[$i]]=true;
                    $ans++;
            }
        }
        return $ans;
    }
}
?>