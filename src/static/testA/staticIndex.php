<?php



class MyMath {
    public static function divByTwo(int $x) {
        return ($x/2);
    }
}

$y = MyMath::divByTwo(9);

var_dump($y);
