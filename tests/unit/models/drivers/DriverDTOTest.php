<?php namespace unit\models\drivers;

require_once __DIR__ . '/../../TestHelper.php';

use Causey\ArrayAndObject\DriverDTO;
use PHPUnit\Framework\TestCase;

class DriverDTOTest extends TestCase
{

    public function test__construct()
    {
        $this->assertInstanceOf(DriverDTO::class, new DriverDTO(44));
    }
}
