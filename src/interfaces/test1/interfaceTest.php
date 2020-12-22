<?php namespace interfaces\test;

interface IPerson {
    public function speak($words);
    public function breath();
}

interface IFactory {
    public function createNewDriver();
    public function createNewTeacher();
}

abstract class Speaker {
    function setDiameter($diameter) {
    }
}

abstract class Person implements IPerson {

}

class Teacher extends Person {

    public function speak($words)
    {
        // TODO: Implement speak() method.
    }

    public function breath()
    {
        // TODO: Implement breath() method.
    }
}
