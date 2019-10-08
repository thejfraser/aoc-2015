<?php
use Day01\FloorMap;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

final class FloorMapTest extends TestCase {
    public function testFinalLevelReturns0ForTwoUpAndDown()
    {
        $input = '()()';
        $this->assertSame(0, FloorMap::getFinalLevel($input));
    }

    public function testFinalLevelReturns1ForOneUp()
    {
        $input = '(';
        $this->assertSame(1, FloorMap::getFinalLevel($input));
    }

    public function testFinalLevelReturns3ForUUDUUDU()
    {
        $input = '(()(()(';
        $this->assertSame(3, FloorMap::getFinalLevel($input));
    }

    public function testFinalLevelReturnsMinus3ForDUDDUDD()
    {
        $input = ')())())';
        $this->assertSame(-3, FloorMap::getFinalLevel($input));
    }

    public function testBasementLevelReturns1ForD()
    {
        $input = ')';
        $this->assertSame(1, FloorMap::getFirstBasementLevel($input));
    }

    public function testBasementLevelReturns11ForUUUDDUDDUDD()
    {
        $input = '((())())())';
        $this->assertSame(11, FloorMap::getFirstBasementLevel($input));
    }
}