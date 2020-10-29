<?php
include "../src/functions/stringAlgs.php";

use PHPUnit\Framework\TestCase;

class StringSolutionTest extends TestCase
{
    /** @test  */
    public function testRestoreString()
    {
        $test = new StringSolution();
        $s = "codeleet";
        $indices = [4,5,6,7,0,2,1,3];
        $ans = $test->restoreString($s, $indices);
        $this->assertEquals("leetcode", $ans);
    }
}
