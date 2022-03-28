<?php
class Solution {

/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s) {
    $ansnum=-1;
    $hash=[];
    for($i=0;$i<strlen($s);$i++){
        if(isset($hash[$s[$i]])){
            $hash[$s[$i]]['num']++;
        }
        else{
            $hash[$s[$i]]['index']=$i;
            $hash[$s[$i]]['num']=1;
        }
    }
    foreach($hash as $hash_arr){
        if($hash_arr['num']==1){
            $ansnum = $hash_arr['index'];
            break;
        }
    }
    return $ansnum;
}
}
?>