<?php

interface IFly {
    public function flapWings();

}

interface ISwim {
    public function flapFins();
}

abstract class Swim implements ISwim {

}

abstract class Fly implements IFly {

}

class Bat extends Fly {
    public function flapWings()
    {
        // TODO: Implement flapWings() method.
    }
}

class Shark extends Swim{
    public function flapFins()
    {
        // TODO: Implement flapFins() method.
    }
}

class Whale {

}

class Chicken {

}




