<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
        $hash=['a'=>true,'e'=>true,'i'=>true,'o'=>true,'u'=>true,
               'A'=>true,'E'=>true,'I'=>true,'O'=>true,'U'=>true];
        $left=0;
        $right=0;
        for($i=0;$i<strlen($s);$i++){
            if(isset($hash[$s[$i]])){
                if($i<strlen($s)/2){
                    $left++;
                }else{
                    $right++;
                }
            }
        }
        return $left==$right;
    }
}
?>