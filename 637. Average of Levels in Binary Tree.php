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
    function search($node,&$arr,$level=0){
        if($node){
            if(isset($arr[$level])){
                $arr[$level]['sum']+=$node->val;
                $arr[$level]['num']++;
            }else{
                $arr[$level]=['sum'=>$node->val,'num'=>1];
            }
            if($node->left){
                $this->search($node->left,$arr,$level+1);
            }
            if($node->right){
                $this->search($node->right,$arr,$level+1);
            }
        }
    }
    /**
     * @param TreeNode $root
     * @return Float[]
     */
    function averageOfLevels($root) {
        $arr=[];
        $this->search($root,$arr);
        $ans=[];
        for($i=0;$i<count($arr);$i++){
            $ans[]=$arr[$i]['sum']/$arr[$i]['num'];
        }
        return $ans;
    }
}
?>