<?php namespace Causey\Composition\Roster;

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
        static $id = 1;
        $this->id = $id;
        $id++;
    }
}

class StandardDriver extends Driver {

}

class TurboDriver extends Driver {

}

class Roster {
    protected string $name;

    protected $members = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function add($dri)
    {
        $this->members[] = $dri;
    }

    public function members()
    {
        return $this->members;
    }
}

$driverA = new StandardDriver();
$driverB = new TurboDriver();

$r = new Roster('winner');
$r->add($driverA);
$r->add($driverB);

var_dump($r);
