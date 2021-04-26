<?php namespace richestCustomerWealth;
/*
 * 4/25/21
 * Runtime: 8 ms, faster than 100.00% of PHP online submissions for Richest Customer Wealth.
 * Memory Usage: 16.1 MB, less than 88.52% of PHP online submissions for Richest Customer Wealth.
 */
class Solution1672 {

    /**
     * @param Integer[][] $accounts
     * @return Integer
     */
    function maximumWealth($accounts) {
        /*$ans = 0;
        foreach ($accounts as $customer)
        {
            $runningSum = 0;
            foreach ($customer as $element)
            {
                $runningSum += $element;
            }
            if($runningSum > $ans)
            {
                $ans = $runningSum;
            }
        }
        return $ans;*/
       $ans = max(array_map('array_sum', $accounts));
       return $ans;
    }
}