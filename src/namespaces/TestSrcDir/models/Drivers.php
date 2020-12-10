<?php namespace Laracasts\TestSrcDir\models;

require __DIR__ . '/../../../../vendor/autoload.php';

use Laracasts\TestAppDir\libs\SomeUtility;

class Drivers
{


}

$uObj = new SomeUtility();
$uObj->setVar(4);
$test = $uObj->getVar();
var_dump($test);