<?php
class Solution {

    function merge(&$nums1, $m, $nums2, $n) {
        array_splice($nums1,$m,$n,$nums2);
        sort($nums1);
    }
}