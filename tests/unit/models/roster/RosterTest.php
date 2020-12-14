<?php

require_once __DIR__ . '/../../TestHelper.php';

use Causey\Models\Roster\Roster;
use Causey\Models\Drivers\Driver;
use Causey\Database\IDatabase;
use PHPUnit\Framework\TestCase;

class RosterTest extends TestCase
{

    public function testDelete()
    {

    }

    public function test__construct()
    {
        $this->assertInstanceOf(Roster::class, new Roster());
    }

    public function testCreate()
    {

    }

    public function testUpdate()
    {

    }

    public function testAddDriver()
    {
        $rosObj = new Roster();
        $driverObj = new Driver(1, new \Causey\Database\DatabasePlain());
        $rosObj->addDriver($driverObj);
        $driverObj = new Driver(44, new \Causey\Database\DatabasePlain());
        $rosObj->addDriver($driverObj);
        $driverObj = new Driver(2, new \Causey\Database\DatabasePlain());
        $rosObj->addDriver($driverObj);
        var_dump($rosObj);
    }
}
