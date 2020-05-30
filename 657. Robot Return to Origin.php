<?php
class Solution {
    function judgeCircle($moves) {
        $row=0; $col=0;
        for($i=0;$i<strlen($moves);$i++)
        {
            switch($moves[$i])
            {
            case("R"): $col++; break;
            case("L"): $col--; break;
            case("D"): $row++; break;
            case("U"): $row--; break;
            }
        }
        return ($row==0 and $col==0);
            
    }
}