class Solution {

/**
 * @param String $s
 * @return Integer
 */
function countBinarySubstrings($s) {
    $total=0;//輸出的答案
    $pre=0;//暫存組數
    $stack=1;//現時組數
    for($i=1;$i<strlen($s);$i++){
        if($s[$i]!=$s[$i-1]){
            $total+=min($pre,$stack);//取得組數
            [$pre,$stack]=[$stack,1];//重製現時組數,並且將組數寄存給暫存
        }
        else{
            $stack++;//增加組數
        }
    }
    return $total+min($pre,$stack);//最後不一定會輸出組數因此加上min($pre,$stack)
}
}