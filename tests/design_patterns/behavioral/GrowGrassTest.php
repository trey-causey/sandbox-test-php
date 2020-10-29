<?php

include "../../../src/design_patterns/behavioral/strategy/strategyIndex.php";
use PHPUnit\Framework\TestCase;

class GrowGrassTest extends TestCase
{
    /** @test  */
    public function testGrowGrassObjectReturn()
    {
        $growGrass = new GrowGrass();
        $this->assertInstanceOf(GrowGrass::class, $growGrass);
    }
    /** @test  */
    public function testSetGrowGrass()
    {

    }
    /** @test  */
    public function testSpreadSeed()
    {

    }


}
