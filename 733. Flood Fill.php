<?php
class Solution {
    function setColor(&$image,$i,$j,$oldColor,$newColor){
        if($image[$i][$j]==$oldColor){
            $image[$i][$j]=$newColor;
            if($i>0) $this->setColor($image,$i-1,$j,$oldColor,$newColor);
            if($j>0) $this->setColor($image,$i,$j-1,$oldColor,$newColor);
            if($i<count($image)-1) $this->setColor($image,$i+1,$j,$oldColor,$newColor);
            if($j<count($image[0])-1) $this->setColor($image,$i,$j+1,$oldColor,$newColor);
        }
    }
    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $color) {
        if($image[$sr][$sc]!=$color)$this->setColor($image,$sr,$sc,$image[$sr][$sc],$color);
        return $image;
    }
}
?>