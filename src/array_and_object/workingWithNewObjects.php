<?php

class CoffeeMaker {
    public function Brew() {
        var_dump("brewing the coffee");
    }
}



(new CoffeeMaker())->Brew();