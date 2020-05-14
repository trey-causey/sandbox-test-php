<?php

require __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/../functions/numberAlgs.php';


$test1 = (new Solution)->numberOfSteps(14);
$test2 = (new Solution)->numberOfSteps(8);
print "$test1, $test2";


