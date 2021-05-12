class Solution {

/**
 * @param String $s
 * @return Integer
 */
function firstUniqChar($s) {
    $checks=[];
    for($i=0;$i<strlen($s);$i++){
        if(isset($checks[$s[$i]])){
            $checks[$s[$i]]++;
        }
        else{
            $checks[$s[$i]]=1;
        }
    }
    
    for($i=0;$i<strlen($s);$i++){
        if($checks[$s[$i]]==1){
            return $i;
        }
    }
    return -1;
}
}