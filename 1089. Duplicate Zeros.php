class Solution {

/**
 * @param Integer[] $arr
 * @return NULL
 */
function duplicateZeros(&$arr) {
    $len=count($arr);
    $news=[];
    for($i=0;$i<$len;$i++){
        echo $i;
        if(count($news)==$len){
            break;
        }
        if($arr[$i]==0 and count($news)<$len){
            $news[]=0;
        }
        if(count($news)<$len){
            $news[]=$arr[$i];
        }
    }
    $arr=$news;
}
}