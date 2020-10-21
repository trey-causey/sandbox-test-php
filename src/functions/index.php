<?php

require __DIR__ . '/../../vendor/autoload.php';
require_once 'numberAlgs.php';
require_once 'stringAlgs.php';

$test = new StringSolution();
$s = "codeleet";
$indices = [4,5,6,7,0,2,1,3];
var_dump($indices);
$ans = $test->restoreString($s, $indices);
var_dump($ans);
print $ans;
print "</br>";
print "\tdone";

