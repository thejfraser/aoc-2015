<?php

use Day02\WrappingCalculator;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

final class WrappingCalculatorTest extends TestCase
{
    public function testWrappingReturns4For1x1x1()
    {
        $this->assertSame(7, WrappingCalculator::calculateWrappingArea(1, 1, 1));
    }

    public function testWrappingReturns58For2x3x4()
    {
        $this->assertSame(58, WrappingCalculator::calculateWrappingArea(2, 3, 4));
    }

    public function testWrappingReturns43For1x1x10()
    {
        $this->assertSame(43, WrappingCalculator::calculateWrappingArea(1, 1, 10));
    }

    public function testRibbonReturns34For2x3x4()
    {
        $this->assertSame(34, WrappingCalculator::calculateRibbonLength(2, 3, 4));
    }

    public function testRibbonReturns34For4x3x2()
    {
        $this->assertSame(34, WrappingCalculator::calculateRibbonLength(4, 3, 2));
    }

    public function testRibbonReturns14For1x1x10()
    {
        $this->assertSame(14, WrappingCalculator::calculateRibbonLength(1, 1, 10));
    }

    public function testRibbonReturns14For10x1x1()
    {
        $this->assertSame(14, WrappingCalculator::calculateRibbonLength(10, 1, 1));
    }
}