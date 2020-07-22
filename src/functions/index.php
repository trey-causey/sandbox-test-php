<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once 'numberAlgs.php';

$test = new Solution();
$nums = [1,1,2,2];
var_dump($nums);
$n = 2;
$ans = $test->shuffle($nums,$n);
var_dump($ans);
print "</br>";
print "\tdone";

