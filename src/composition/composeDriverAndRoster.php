<?php namespace Causey\Composition\Driver;

use phpDocumentor\Reflection\Types\This;

interface IDriver {

}

abstract class Driver implements IDriver {
    protected $id;
    protected $driverRef;
    protected $surname;
    protected $number;
    protected $code;

    public function __construct()
    {

    }

}

class StandardDriver extends Driver {

}

class TurboDriver extends Driver {

}

class DriverFactory
{
    public static function createDriverByType(IDriver $driver) : IDriver
    {
        switch ($driver)
        {
            case StandardDriver::class:
                $driverObj = new StandardDriver();
                break;
            case TurboDriver::class:
                $driverObj = new TurboDriver();
                break;
        }
        return $driverObj;
    }
}

class Roster {

    protected $driverArray = [];
    /*protected IDriver $primaryDriver;
    protected IDriver $secondaryDriver;
    protected IDriver $turboDriver;*/
    public static function create()
    {
        return new static();
    }

    public function __construct()
    {
        //$driverArray = [];
        $this->driverArray = [];
    }

    public function addDriverToRoster(IDriver $driver)
    {
        array_push($this->driverArray, $driver);
    }

    public function sizeOf()
    {
        return count($this->driverArray);
    }
}

class RosterFactory {
    public static function createRoster(int $numOfMainDrivers, int $numOfTurboDrivers) {

    }
}
$driverA = new StandardDriver();
$driverB = new StandardDriver();
$driverC = new TurboDriver();
$roster = Roster::create();
var_dump($roster);
$roster->addDriverToRoster($driverA);
$roster->addDriverToRoster($driverB);
//$roster->addDriverToRoster($driverC);
$size = $roster->sizeOf();
echo $size;
