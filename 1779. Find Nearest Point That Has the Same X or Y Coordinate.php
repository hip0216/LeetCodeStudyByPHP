class Solution {

/**
 * @param Integer $x
 * @param Integer $y
 * @param Integer[][] $points
 * @return Integer
 */
function nearestValidPoint($x, $y, $points) {
    $minS=99999999;
    $minI='';
    for($i=0;$i<count($points);$i++){
        if($points[$i][0]==$x && $points[$i][1]==$y){
            return $i;
        }
        else if($points[$i][0]==$x){
            $s=abs($points[$i][1]-$y);
            if($s<$minS){
                $minS=$s;
                $minI=$i;
            }
        }
        else if($points[$i][1]==$y){
            $s=abs($points[$i][0]-$x);
            if($s<$minS){
                $minS=$s;
                $minI=$i;
            }
        }
    }
    return ($minI!=='')?$minI:-1;
}
}