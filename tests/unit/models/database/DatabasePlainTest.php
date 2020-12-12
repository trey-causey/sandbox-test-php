<?php

use Causey\Database\DatabasePlain;
use PHPUnit\Framework\TestCase;

class DatabasePlainTest extends TestCase
{

    public function testQuery()
    {

    }

    public function test__construct()
    {
        $this->assertInstanceOf(DatabasePlain::class, new DatabasePlain());
    }

    public function testFetchAll()
    {

    }
}
