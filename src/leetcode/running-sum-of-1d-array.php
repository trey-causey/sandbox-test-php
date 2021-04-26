<?php namespace runningSumOf1dArray;

class Solution1480 {

/**
* @param Integer[] $nums
* @return Integer[]
*/
    function runningSum($nums) {
        $ans = array();
        $traillingSum = 0;
        foreach ($nums as $num)
        {
            array_push($ans, $traillingSum += $num);

        }
        return $ans;
    }
}