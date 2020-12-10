<?php

interface ITest {
    public function setInt($val);
}

class Test implements ITest {
    protected $intVal1 = 2;

    public function getInt() {
        return $this->intVal1;
    }

    public function setInt($val)
    {
        $this->intVal1 = $val;
    }
}

class MyStuff {
    public function store(ITest $i) {
        die('pushing store from ITest $itest');
    }
}

$mystuff = new MyStuff();
$mystuff->store(new Test());

$method = new ReflectionMethod(Test::class, 'getInt');

