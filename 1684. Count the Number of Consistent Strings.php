class Solution {

/**
 * @param String $allowed
 * @param String[] $words
 * @return Integer
 */
function countConsistentStrings($allowed, $words) {
    $hash=[];
    $ans=0;
    for($i=0;$i<strlen($allowed);$i++){
        $hash[$allowed[$i]]=true;   
    }
    foreach($words as $word){
        $strlenword=strlen($word);
        $num=0;
        for($j=0;$j<$strlenword;$j++){
           if(isset($hash[$word[$j]])){
               $num++;
           } 
        }
        if($num==$strlenword)$ans++;
    }
    return $ans;
}
}