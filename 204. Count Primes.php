<?php
class Solution {

    function countPrimes($n) {
        if ($n<=2)
            return 0;
        $count_Primes=0;
        $i=2;
        while($i<$n)
        {
            $check=0;
            $j=2;
            while($j*$j<=$i)
            {
                if($i%$j==0)
                {
                    $check=1;
                    break;
                }
                $j+=1;
            }
            ($check==1)?0:$count_Primes+=1;
            $i+=1;             
        }
        return $count_Primes;
    }
}