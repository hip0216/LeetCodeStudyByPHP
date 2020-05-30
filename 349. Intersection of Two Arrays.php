<?php
class Solution {
    function intersection($nums1, $nums2) {
        return array_unique(array_intersect($nums1,$nums2));
    }
}