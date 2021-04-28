<?php namespace unit\leetcode;

require_once __DIR__ . '/helper_file.php';

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    /**
     * @test
     * @dataProvider dataProviderForSolution1365
     */
    public function testSmallerNumbersThanCurrent($data,$expected)
    {
        $solObj = new \numberOfSmallerNumbers\Solution1365();
        $this->assertEquals($expected, $solObj->smallerNumbersThanCurrent($data));
    }

    /**
     * @test
     * @dataProvider dataProviderForSolution1480
     */
    public function testRunningSum($data,$expected)
    {
        $solObj = new \runningSumOf1dArray\Solution1480();
        $this->assertEquals($expected, $solObj->runningSum($data));
    }

     /**
      * @test
      * @dataProvider dataProviderForSolution1672
      */
    public function testMaximumWealth($data, $expected)
    {
        $solObj = new \richestCustomerWealth\Solution1672();
        $this->assertEquals($expected, $solObj->maximumWealth($data));
    }

    public function dataProviderForSolution1480()
    {
        return [
            [[1,2,3,4],[1,3,6,10]],
            [[1,1,1,1,1],[1,2,3,4,5]],
            [[3,1,2,10,1],[3,4,6,16,17]]

        ];
    }

    public function dataProviderForSolution1672()
    {
        return [
          [[[1,2,3],[3,2,1]],6],
          [[[1,5],[7,3],[3,5]],10],
          [[[2,8,7],[7,1,3],[1,9,5]],17]
        ];
    }

    public function dataProviderForSolution1365()
    {
        return [
            [[8,1,2,2,3],[4,0,1,1,3]],
            [[6,5,4,8],[2,1,0,3]],
            [[7,7,7,7],[0,0,0,0]]
        ];
    }
}
