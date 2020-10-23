<?php

class StringSolution {
    /**
     * @param String $s
     * @param Integer[] $indices
     * @return String
     */
    function restoreString($s, $indices) {
/*        $ansArray = [];
        $splitString = str_split($s);
        foreach ($indices as $index) {
            $ansArray[$index] = $splitString[$index];
        }
        var_dump($ansArray);
        return implode($ansArray);
----------code below from https://medium.com/@poitevinpm/leetcode-1528-shuffle-string-3365d2bd6ab4 ----
*/
        $res = $s;
        $l = strlen($s);
        for ($i = 0; $i < $l; $i++) {
            $res[$indices[$i]] = $s[$i];
        }
        return $res;
    }
}
$test = new StringSolution();
$s = "codeleet";
$indices = [4,5,6,7,0,2,1,3];
$ans = $test->restoreString($s, $indices);
var_dump($ans);