<?php
/*
https://www.youtube.com/watch?v=dgPabAsTFa8
https://www.zhihu.com/question/21923021/answer/281346746
*/
class Solution {
    /*
        製作Prefix表
    */
    function getNextPrix($needle){
        $Prefix=[-1];
        $index=0;//目前項目
        $macthIndex=-1;//第一個匹配到的地方設定為-1,讓KMP在執行時可以知道何時讓index+1,數字則代表最大匹配到的前綴字符串
        while($index<strlen($needle)){
            //$macthIndex==-1當未匹配到時需要讓index+1,並且讓現在匹配的前綴字符串移動到下一位
            //$needle[$index]==$needle[$macthIndex] 代表當前的字符串可匹配到,因此將$Prefix[$index]=$macthIndex;將當前匹配過的數量放進該字符串中,並且匹配下一項
            if($macthIndex==-1 || $needle[$index]==$needle[$macthIndex]){
                $index++;
                $macthIndex++;
                $Prefix[$index]=$macthIndex;
            }else{
                //當匹配不到並且現在匹配的位置不是-1時,移動匹配項到先前匹配過的字符串的最後面,避免重複匹配
                $macthIndex=$Prefix[$macthIndex];
            }
        }
        return $Prefix;
    }
    /**
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    function strStr($haystack, $needle) {
        $Prefix=$this->getNextPrix($needle);
        //KMP算法主體
        /*
        上下兩者算法看似相似,上面的是插入為每一個要拿來匹配的字符串的最大前綴字符串,這樣在進行匹配時可以從先前匹配過的項目之後進行匹配,避免被匹配過的字符串重複匹配的問題
        */
        $index=0;
        $macthIndex=0;
        while($index<strlen($haystack) && $macthIndex<strlen($needle)){
            if($macthIndex==-1 || $haystack[$index]==$needle[$macthIndex]){
                $index++;
                $macthIndex++;
            }else{
                //移動匹配項到先前匹配過的字符串的最後面,避免重複匹配
                $macthIndex=$Prefix[$macthIndex];
            }
        }
        //當有匹配到相對應的字符串時
        if($macthIndex==strlen($needle))
            //最後移動到的位置-要匹配的字符串,因為只是要輸出最一開始匹配到的第一個字符串位置,所以需要減掉需要匹配的字符串
            return $index-$macthIndex;
        else
            return -1;
    }
}
?>