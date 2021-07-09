class Solution {

/**
 * @param String[] $list1
 * @param String[] $list2
 * @return String[]
 */
function findRestaurant($list1, $list2) {
    $hash=[];
    $ans=[];
    $min=999999999;
    foreach($list2 as $k=>$list){
        $hash[$list]=$k;
    }
    foreach($list1 as $k=>$list){
        if(isset($hash[$list])){
            $ans[$k+$hash[$list]][]=$list;   
            $min=min($k+$hash[$list],$min);
        }
    }
    return $ans[$min];
}
}