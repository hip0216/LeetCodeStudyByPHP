<?php
class Solution {
    function getHint($secret, $guess) {
        $a=0;$b=0;
        $secret_array=[];$guess_array=[];
        for($i=0;$i<strlen($secret);$i++)
        {
          $secret_string=$secret[$i];$guess_string=$guess[$i];
          if($secret[$i]==$guess[$i])
          {
              $a++;
              continue;
          }
          (isset($secret_array[$secret_string]))?$secret_array[$secret_string]++:$secret_array[$secret_string]=1;
          (isset($guess_array[$guess_string]))?$guess_array[$guess_string]++:$guess_array[$guess_string]=1;
          ($secret_array[$guess_string]>0)?$guess_array[$guess_string]--.$secret_array[$guess_string]--.$b++:null;
          ($guess_array[$secret_string]>0)?$guess_array[$secret_string]--.$secret_array[$secret_string]--.$b++:null;
        }
        return $a."A".$b."B";
    }
}