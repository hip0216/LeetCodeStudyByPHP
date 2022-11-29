<?php
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function pre($root,&$ans){
        if($root){  
            $ans[]=$root->val;
            for($i=0;$i<count($root->children);$i++){
                $this->pre($root->children[$i],$ans);
            }
        }
    }
    function preorder($root) {
        $ans=[];
        $this->pre($root,$ans);
        return $ans;
    }
}
?>