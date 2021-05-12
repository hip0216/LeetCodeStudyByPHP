class Solution {

/**
 * @param Integer[] $nums
 * @return Integer[]
 */
function findDuplicates($nums) {
    $arr=[];
    $buffer=[];
    if(count($nums)>0){
        foreach($nums as $num){
            if(isset($buffer[$num])){
                if($buffer[$num]==1){
                    $arr[]=$num;
                    $buffer[$num]=2;
                }    
            }
            else{
                $buffer[$num]=1;
            }
            
        }
    }
    return $arr;
}
}