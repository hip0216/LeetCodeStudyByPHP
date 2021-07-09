class Solution {

/**
 * @param Integer[] $arr
 * @return Integer[][]
 */
function minimumAbsDifference($arr) {
    sort($arr);
    $hash=[];
    $len=count($arr);
    $i=1;
    $minDistinct=99999999;
    while($i<$len){
        $distinct=$arr[$i]-$arr[$i-1];
        $minDistinct=min($minDistinct,$distinct);
        $hash[$distinct][]=[$arr[$i-1],$arr[$i]];
        $i++;
    }
    return $hash[$minDistinct];
}
}