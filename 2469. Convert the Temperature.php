<?php
class Solution {

    /**
     * @param Float $celsius
     * @return Float[]
     */
    function convertTemperature($celsius) {
        return [round($celsius+273.15,3),round($celsius*1.8+32,3)];
    }
}
?>