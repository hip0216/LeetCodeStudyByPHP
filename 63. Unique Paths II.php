<?php
class Solution {
    function uniquePathsWithObstacles($obstacleGrid) {
        $m=count($obstacleGrid);
        $n=count($obstacleGrid[0]);
        if($obstacleGrid[0][0]==1) return 0;
        $obstacleGrid[0][0]=1;
        for($i=1;$i<$m;$i++)
            ($obstacleGrid[$i][0]==0 and $obstacleGrid[$i-1][0]==1)?$obstacleGrid[$i][0]=1:$obstacleGrid[$i][0]=0;
        for($j=1;$j<$n;$j++)
            ($obstacleGrid[0][$j]==0 and $obstacleGrid[0][$j-1]==1)?$obstacleGrid[0][$j]=1:$obstacleGrid[0][$j]=0;
        for($i=1;$i<$m;$i++)
        {
            for($j=1;$j<$n;$j++)
            {
                if($obstacleGrid[$i][$j]==0)
                    $obstacleGrid[$i][$j]=$obstacleGrid[$i-1][$j]+$obstacleGrid[$i][$j-1];
                else
                    $obstacleGrid[$i][$j]=0;
            }
        }
        return $obstacleGrid[$m-1][$n-1];
    }
}