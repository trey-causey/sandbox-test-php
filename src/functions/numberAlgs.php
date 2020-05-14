<?php
require __DIR__ . '/../../vendor/autoload.php';

class Solution {

    /**
     * @param Integer $num
     * @return Integer
     */
    function numberOfSteps ($num)
    {
//        $count = 0;
//        while($num % 2 != 0) {
//            $num /= 2;
//            $count++;
//        }
//        return $count;

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
}