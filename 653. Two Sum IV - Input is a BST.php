<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Boolean
     */
    function check($node,$k,&$hash=[]){
        if(!$node){
            return false;
        }
        if(isset($hash[$node->val])){
            return true;
        }else{
            $hash[$k-$node->val]=1;
        }
        return $this->check($node->left,$k,$hash) || $this->check($node->right,$k,$hash);
    }
    function findTarget($root, $k) {
        return $this->check($root,$k);
    }
}
?>