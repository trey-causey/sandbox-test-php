<?php namespace Src\Composition;

interface Shape {
    function Area($var1);
}

class Circle implements Shape {
    private $color;
    function Area($radius) : float {
        return $radius * M_PI;
    }
}

class Square implements Shape {
    function Area($edge) : float {
        return $edge * 2;
    }
}

class Window {

    function Area($length): float
    {
       $rec = new Square();
       return $rec->Area($length);
    }
}

$win = new Window();
$ans = $win->Area(6);
var_dump($ans);