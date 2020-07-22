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

    /**
     * @param Integer[] $nums
     * @param Integer $n
     * @return Integer[]
     */
    function shuffle($nums, $n)
    {
        $arr = [];
        for($i=0; ($i<(count($nums)/2)); $i++)
        {
            array_push($arr, $nums[$i]);
            array_push($arr, $nums[($i+$n)]);
        }
        return $arr;
    }
}