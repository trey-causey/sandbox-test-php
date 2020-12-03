<?php

class aClass
{
   public $points = 0;
    function addPoints($amount)
    {
        $this->points=+$amount;
    }
}
$aClassObj = new aClass();
var_dump($aClassObj);
$addPointsFunc = 'addPoints';

$aClassObj->$addPointsFunc(34);
var_dump($aClassObj);

