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