<?php namespace unit\leetcode;

require_once __DIR__ . '/../../../vendor/autoload.php';
require_once __DIR__ . '/../../../src/leetcode/running-sum-of-1d-array.php';
require_once __DIR__ . '/../../../src/leetcode/richest-customer-wealth.php';

use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
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
}
