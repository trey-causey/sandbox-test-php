<?php

require_once __DIR__ . '/../../TestHelper.php';

use Causey\Models\Drivers\Driver;
use PHPUnit\Framework\TestCase;

class DriverTest extends TestCase {

    /** @test */
    public function TestDriverObject() {
        $this->assertInstanceOf(Driver::class, new Driver(44, new \Causey\Database\DatabasePlain()));
    }

    /** @test */
    public function TestGetData() {
        $testDriver = new Driver(44, new \Causey\Database\DatabasePlain());
        $this->assertIsArray($testDriver->getData());
    }
}


