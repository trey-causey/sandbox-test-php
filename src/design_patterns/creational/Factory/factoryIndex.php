<?php

abstract class Application {
    abstract function createDocument();
    public function newDocument() {}
}

class ConcreteCreator extends Creator {
    public function FactoryMethod()
    {

    }
}

class ConcreteProduct extends Product {

}

abstract class Product {

}

