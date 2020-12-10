<?php

abstract class Driver {
    protected $barColor;
}

class MainDriver extends Driver {
    public function __construct()
    {
        $this->barColor = "black";
    }
}

class JuniorDriver extends Driver {
    public function __construct()
    {
        $this->barColor = "yellow";
    }
}

abstract class DriverFactory {
    protected $product;
    public function anOperation() {
           $this->product = $this->createJuniorDriver();
    }
    abstract function createMainDriver();
    abstract function createJuniorDriver();
}

class CreateDriver extends DriverFactory {
    public function createMainDriver()
    {
        return new MainDriver();
    }
    public function createJuniorDriver()
    {
        return new JuniorDriver();
    }
}

$driver = (new CreateDriver())->createJuniorDriver();
var_dump($driver);
