<?php

function multiply($a, $b) {
    return $a * $b;
}

function square($n) {
    return multiply($n, $n);
}

function printSquare($n) {
    $squared = square($n);
    print_r($squared);
}

printSquare(4);
