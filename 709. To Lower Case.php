class Solution {

/**
 * @param String $s
 * @return String
 */
function toLowerCase($s) {
    $str="";
    for($i=0;$i<strlen($s);$i++){
        if(preg_match('/^[a-z]+$/', $str[$i])){
            $str.=ucfirst($s[$i]);
        }
        else{
            $str.=strtolower($s[$i]);
        }
    }
    return $str;
}
}