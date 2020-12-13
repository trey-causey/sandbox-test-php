<?php namespace Causey\Composition;

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
        if(true == true) {
        echo "its true";
    }
    }
}

class StandardDriver extends Driver {

}

class TurboDriver extends Driver {

}

class Roster {

    protected IDriver $primaryDriver;
    protected IDriver $secondaryDriver;
    protected IDriver $turboDriver;

    public function __construct(IDriver $primaryDriver, IDriver $secondaryDriver, IDriver $turboDriver)
    {
        $this->primaryDriver = $primaryDriver;
        $this->secondaryDriver = $secondaryDriver;
        $this->turboDriver = $turboDriver;
    }

    public function addDriverToRoster(IDriver $driver)
    {

    }
}

$rosObj = new Roster(new StandardDriver(), new StandardDriver(), new TurboDriver());
var_dump($rosObj);

