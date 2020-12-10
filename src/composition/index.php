<?php namespace Src\Composition;

interface Shape {
    public function Area();
}

class House {
public function __construct()
{
    (new Window());
}
}

class Window {

    public function Area(){
        $rect = new Rectangle();
        return $rect->Area();
    }
}

/*class Circle implements Shape {
    public function Area(){
        return  * M_PI;
    }
}*/

class Rectangle implements Shape {
    protected $width;
    protected $height;
    public function __construct()
    {
        $this->height = 5;
        $this->width = 5;
    }

    public function Area(){
        return $this->width * $this->height;
    }
}

(new House());
//echo "hello!";
$win = new Window();
$ans = $win->Area();
var_dump($ans);
//echo " world!";
$house = new House();
var_dump($house);