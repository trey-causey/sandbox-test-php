<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once 'numberAlgs.php';

$test = new Solution();

$nums = [3,1,2,10,1];
$ans = $test->runningSum($nums);
var_dump($ans);
;
