<?php
class Solution {
    function canPlaceFlowers($flowerbed, $n) {
       $count_flower=0;
       for($i=0;$i<count($flowerbed);$i++)
       {
           ($flowerbed[$i]==0 and ($i==0 or $flowerbed[$i-1]==0) and ($i==count($flowerbed)-1 or $flowerbed[$i+1]==0))?($flowerbed[$i]=1).($count_flower++):null;
       }
        return $count_flower>=$n;
    }
}