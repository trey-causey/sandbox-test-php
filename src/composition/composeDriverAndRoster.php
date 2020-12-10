<?php

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

class Roster {
    /** @var IDriver  */
    protected IDriver $driver;

    public function __construct(IDriver $driver)
    {
        $this->driver = $driver;
    }
}

$rosObj = new Roster(new StandardDriver());
var_dump($rosObj);

