<?php
class Solution {

    /**
     * @param String $digits
     * @return String[]
     */
    function getWord(){
        $word['2'] = ["a","b","c"];
        $word['3'] = ["d","e","f"];
        $word['4'] = ["g","h","i"];
        $word['5'] = ["j","k","l"];
        $word['6'] = ["m","n","o"];
        $word['7'] = ["p","q","r","s"];
        $word['8'] = ["t","u","v"];
        $word['9'] = ["w","x","y","z"];
        return $word;
    }
    function Comb($digits,$word,$allComb,$nowIndex=1){
        if($nowIndex<strlen($digits)){
            $curr=[];
            for($i=0;$i<count($allComb);$i++){
                for($j=0;$j<count($word[$digits[$nowIndex]]);$j++){
                    $curr[]=$allComb[$i].$word[$digits[$nowIndex]][$j];
                }    
            }
            
            return $this->Comb($digits,$word,$curr,$nowIndex+1);
        }else{
            return $allComb;
        }
    }
    function letterCombinations($digits) {
        $word=$this->getWord();
        if(strlen($digits)==0) return [];
        if(strlen($digits)==1) return $word[$digits[0]];
        return $this->Comb($digits,$word,$word[$digits[0]]);
        
    }
}
?>