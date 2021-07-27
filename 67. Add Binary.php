<?php
class Solution {

/**
 * @param String $a
 * @param String $b
 * @return String
 */
function addBinary($a, $b) {
    $la=strlen($a)-1;
    $lb=strlen($b)-1;
    $str="";
    $status=0;
    while($la>=0 || $lb>=0){
       $a_num=($la>=0)?$a[$la]:0;
       $b_num=($lb>=0)?$b[$lb]:0;
       $all=$a_num+$b_num+$status;
       if($all%2==1){
           $str.='1';
       }
       else{
           $str.='0';
       }
       if($all>1){
           $status=1;
       }
       else{
           $status=0;     
       }
       $la--;
       $lb--;
    }
    if($status){
        $str.=$status;   
    }
    return strrev($str);
}
}
?>