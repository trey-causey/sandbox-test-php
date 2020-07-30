<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once 'numberAlgs.php';

$test = new Solution();
$candies = [12,1,12];
$extraCandies = 10;
var_dump($candies);
$ans = $test->kidsWithCandies($candies, $extraCandies);
var_dump($ans);
print "</br>";
print "\tdone";

