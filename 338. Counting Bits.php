class Solution {

/**
 * @param Integer $n
 * @return Integer[]
 */
function countBits($n) {
    $ans=[];
    if($n==0)
    {
        $ans[0]=0;
        return $ans;
    }
    else if($n==1)
    {
        $ans[0]=0;
        $ans[1]=1;
        return $ans;
    }
    else{
        $ans[0]=0;
        $ans[1]=1;
        $ans[2]=1;
        $num=4;
        for($i=3;$i<=$n;$i++)
        {
            
             if($i==$num)
            {
                $ans[$i]=1;
                $num*=2;
            }
            else{
               
                $ans[$i]=1+$ans[$i-$num/2];
            }
            
        }
    }
    return $ans;
}
}