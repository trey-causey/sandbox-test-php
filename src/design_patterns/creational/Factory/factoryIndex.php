<?php

//example with just abstract class

abstract class Creator {
    abstract function FactoryMethod();
    public function AnOperation() {}
}

class ConcreteCreator extends Creator {
    public function FactoryMethod()
    {
       return new ConcreteProduct();
    }
}

class ConcreteProduct extends Product {

}

abstract class Product {

}

$aProduct = (new ConcreteCreator())->FactoryMethod();
var_dump($aProduct);

//example with interfaces
interface IProduct {

}
class CCreator {
    public function createIProduct() {
        return new ConProduct();
    }
}

class ConProduct implements IProduct {

}

$example = (new CCreator())->createIProduct();
var_dump($example);
