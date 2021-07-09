class Solution {

/**
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isSubsequence($s, $t) {
    $len=strlen($s);
    $num=0;
    for($i=0;$i<strlen($t);$i++){
        if($t[$i]==$s[$num]){
            $num++;
        }
    }
    return ($len<=$num);
}
}