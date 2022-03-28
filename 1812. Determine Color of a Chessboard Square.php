class Solution {

/**
 * @param String $coordinates
 * @return Boolean
 */
function squareIsWhite($coordinates) {
    return ((ord($coordinates[0])+$coordinates[1])%2)?true:false;
}
}