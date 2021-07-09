class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findErrorNums($nums) {
    $reapt=-1;
    $miss=-1;
    foreach($nums as $k=>$num){
        if($nums[abs($nums[$k])-1]<0){
            $reapt=abs($nums[$k]);
        }
        else{
         $nums[abs($nums[$k])-1]*=-1;   
        }   
    }
    for($i=0;$i<count($nums);$i++){
        if($nums[$i]>0){
            $miss=$i+1;
        }
    }
    return [$reapt,$miss];
}
}