<?php namespace Src\Delegation;

class Window {
    private $obj;
    private $x;
    public function setShape(Shape $s) {
        $this->obj = $s;
    }

    public function Area() {
        return $this->obj->Area();
    }
}

class Triangle implements Shape {
    public $base;
    public $heightAboveBase;
    public $color;
    public function __construct()
    {
        $this->base = 45;
        $this->heightAboveBase = 28;
        $this->color = "Red";
    }

    public function area()
    {
       return (($this->heightAboveBase * $this->base)/2);
    }

    public function showColor() {
        echo $this->color;
    }
}

class Rectangle implements Shape {
    public $width;
    public $height;
    public function __construct()
    {
        $this->width = 3;
        $this->height = 4;
    }

    public function Area() {
     return $this->width * $this->height;
    }
}

class Circle implements Shape {
    public $diameter;
    public function __construct()
    {
        $this->diameter = 3;
    }
    public function area()
    {
        return (($this->diameter/2)*2) * M_PI;
    }
}

interface Shape {
    public function area();
}

$wObj = new Window;
$wObj->setShape(new Rectangle());
var_dump($wObj->Area());
$wObj->setShape(new Circle());
var_dump($wObj->Area());
$wObj->setShape(new Triangle());
var_dump($wObj->Area());
