<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once 'numberAlgs.php';

$test = new Solution();

$nums = [1,2,3];
$ans = $test->numIdenticalPairs($nums);
echo $ans;
print "</br>";
print "\tdone";

