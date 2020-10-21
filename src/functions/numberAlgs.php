<?php
require __DIR__ . '/../../vendor/autoload.php';

class Solution
{

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps($num)
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
     * Given an array nums of integers, return how many of them contain an even number of digits.
     * @param Integer[] $nums
     * @return Integer
     */
    function findNumbers($nums)
    {
        $findNumsCounter = 0;
        foreach ($nums as $num) {
            if ((strlen((string)$num) %2) == 0) {
                $findNumsCounter++;
            }
        }
        return $findNumsCounter;
    }
}