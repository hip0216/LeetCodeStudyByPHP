<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function decodeString($s) {
        $stack=[];
        $numArr=[];
        $ans="";
        $num=0;
        for($i=0;$i<strlen($s);$i++){
            if(is_numeric($s[$i])){
                $num.=$s[$i];//整數部分,代表未來需要出現多少次
            }else if($s[$i]=='['){//需要將目前部分的整數塞進numArr並且將暫時出現可能未來需要乘前面數字並多次出現的項目存進stack中
                $numArr[]=intval($num);
                $stack[]=$ans;
                $num=0;//存完要重製
                $ans="";//存完要重製
            }else if($s[$i]==']'){//將以前存取的部分是放回原先答案中
                $ans=array_pop($stack).str_repeat($ans,array_pop($numArr));
                //注意此處stack中的項目會是以往已經完成到一半的項目,因此才是pop後用.連結,並且後半段的ans是先前尚未乘過的
            }else{
                $ans.=$s[$i];//如果有英文字出現在數字前這些項目應該直接存進下一次要乘的項目中
            }
        }
        return $ans;
    }
}
?>