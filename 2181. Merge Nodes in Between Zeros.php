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
    /**
     * @param ListNode $head
     * @return ListNode
     */
    function mergeNodes($head) {
        if($head->next==null){
            return $head;
        }
        $current=new ListNode();
        $head=$head->next;
        $ans=$current;
        $sum=0;
        while($head){
            if($head->val==0 && $sum>0){
                $current->val=$sum;
                if($head->next==null){
                    break;
                }
                $current->next=new ListNode();
                $current=$current->next;
                $sum=0;
            }else{
                $sum+=$head->val;
            }
            $head=$head->next;
        }
        return $ans;
    }
}
?>