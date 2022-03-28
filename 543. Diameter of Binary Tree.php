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
    function dfs($root,&$ans){
        if(!$root){
            return 0;
        }
        $left=$this->dfs($root->left,$ans);
        $right=$this->dfs($root->right,$ans);
        $ans=max($ans,$left+$right);
        return max($left,$right)+1;
    }
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function diameterOfBinaryTree($root) {
        $ans=0;
        $this->dfs($root,$ans);
        return $ans;
    }
}
?>