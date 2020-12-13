<?php

interface IType {
    public function methodA();
    public function methodB();
}

class SubTypeA implements IType {
    public function methodA()
    {
        // TODO: Implement methodA() method.
    }
    public function methodB()
    {
        // TODO: Implement methodB() method.
    }
    public function methodC() {}

}

class SubTypeB implements IType {
    public function methodA()
    {
        // TODO: Implement methodA() method.
    }
    public function methodB()
    {
        // TODO: Implement methodB() method.
    }
    public function methodC() {}
}

class RandomClass {
    /**
     * @var \IType
     */
    protected IType $var1;

    public function __construct($var1)
    {
        $this->var1 = $var1;
    }

    /**
     * @return IType
     */
    public function getVar1(): IType
    {
        return $this->var1;
    }

}

$clientA = (new RandomClass(new SubTypeA()))->getVar1();
$clientB = (new RandomClass(new SubTypeB()))->getVar1();
var_dump($clientA);
var_dump($clientB);


