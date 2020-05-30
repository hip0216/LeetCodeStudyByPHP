<?php
class Solution {
    function arrangeCoins($n) {
       return  floor((pow(8 * $n + 1,1/2)-1)/2);
    }
}