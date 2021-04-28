<?php namespace numberOfSmallerNumbers;

class Solution1365 {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function smallerNumbersThanCurrent($nums) {
        $ansArray = [];
        foreach ($nums as $i=>$num) {
            $count = 0;
            foreach($nums as $j=>$element) {
                if(($i != $j) && ($element < $num)) {
                    $count++;
                }
            }
            array_push($ansArray, $count);
        }
        return $ansArray;
/*        $sorted = $nums;
        sort($sorted);
        $number_map = [];
        foreach ($sorted as $position => $num) {
            if (!isset($number_map[$num])) {
                $number_map[$num] = $position;
            }
        }
        $result = [];
        foreach ($nums as $num) {
            $result[] = $number_map[$num];
        }
        return $result;*/
    }
}

$obj = new Solution1365();
$obj->smallerNumbersThanCurrent([8,1,2,2,3]);