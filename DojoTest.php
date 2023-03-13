<?php
use PHPUnit\Framework\TestCase;

include 'code.php';

final class DojoTest extends TestCase {

    /**
     * @dataProvider getNumbers
     */
    public function testGetNegative(int $number, int $expectedResult): void {
        $this->assertEquals($expectedResult, getNegative($number));
    }

    public function getNumbers() : array
    {
        return [
            [0, 0],
            [5, -5],
            [12, -12],
            [-3, -3],
            [-10, -10],
        ];
    }

    /**
     * @dataProvider getDecrementOrIncrement
     */
    public function testIncrementOrDecrement(int $number, $expectedResult): void {
        $this->assertEquals($expectedResult, incrementOrDecrement($number));
    }

    public function getDecrementOrIncrement() : array
    {
        return [
            [2, 3],
            [87, 88],
            [13, 14],
            [-5, -6],
            [-78, -79],
            [-2, -3],
        ];
    }

    /**
     * @dataProvider getCounter
     */
    public function testNegativeToZero(int $number, $expectedResult): void {
        $this->assertEquals($expectedResult, negativeToZero($number));
    }

    public function getCounter() : array
    {
        return [
            [-7, 'Count: -6 -5 -4 -3 -2 -1 0 Boom!'],
            [-2, 'Count: -1 0 Boom!'],
            [-4, 'Count: -3 -2 -1 0 Boom!'],
            [6, "Sorry but your number is already >= 0"],
            [9, "Sorry but your number is already >= 0"],
        ];
    }
}
