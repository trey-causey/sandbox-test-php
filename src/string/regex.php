<?php

$re = '/\b\p{L}+(?:-\p{L}+)*!/u';
$str = 'Hello k-on! Lorem Ipsum! Lorem.';
preg_match($re, $str, $match);
print_r($match);

function respondTo(string $string)
{
    $punctuation = $string[-1];
    echo $punctuation . "\n";
}

respondTo("Let's go make out behind the gym!");
respondTo("Does this cryogenic chamber make me look fat?");
respondTo("FCECDFCAAB");