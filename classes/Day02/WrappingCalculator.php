<?php

namespace Day02;

class WrappingCalculator
{
    public static function calculateWrappingArea($l, $w, $h)
    {
        $A = $l*$w;
        $B = $l*$h;
        $C = $w*$h;

        return (2*$A)+(2*$B)+(2*$C)+min($A, $B, $C);
    }

    public static function calculateRibbonLength($l, $w, $h)
    {
        $V = $l * $w * $h;

        $sides = [$l, $w, $h];
        sort($sides);

        return ($sides[0] + $sides[1])*2 + $V;

    }
}