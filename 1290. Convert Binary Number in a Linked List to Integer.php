<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {
    function getLinkList($head,$linkStr=""){
        if($head){
            $linkStr.=$head->val;
            return $this->getLinkList($head->next,$linkStr);
        }else{
            return $linkStr;
        }
    }
    /**
     * @param ListNode $head
     * @return Integer
     */
    function getDecimalValue($head) {
        return base_convert($this->getLinkList($head),2,10);
    }
}
?>