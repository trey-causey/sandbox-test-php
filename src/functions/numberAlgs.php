<?php
require __DIR__ . '/../../vendor/autoload.php';

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    public function numberOfSteps ($num)
    {
        $count = 0;
        while ($num !== 0) {
            if ($num % 2 === 0) {
                ($num = $num / 2);
                $count++;
            } else {
                $num--;
                $count++;
            }
        }
        return $count;
    }
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function runningSum($nums)
    {
        $ans = array();
        $traillingSum = 0;
        foreach ($nums as $num)
        {
            array_push($ans, $traillingSum += $num);

        }
        return $ans;
    }

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function numIdenticalPairs($nums)
    {
        $count = 0;
        for($i=0; $i<count($nums);$i++)
        {
            $j=$i + 1;
            while($j<count($nums))
            {
                if($nums[$i] == $nums[$j]){
                    $count++;
                }
                $j++;
            }

        }
        return $count;
    }
}