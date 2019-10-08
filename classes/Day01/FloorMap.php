<?php


namespace Day01;


class FloorMap
{
    public static function getFinalLevel($inputString)
    {
        $downLevels = substr_count($inputString, ')');
        $count = strlen($inputString);
        $count -= $downLevels; //this leaves the total number of up levels
        $count -= $downLevels; //this is the final floor

        return $count;
    }

    public static function getFirstBasementLevel($inputString)
    {
        $floor = 0;
        for ($i = 0; $i < strlen($inputString); $i++) {
            $char = $inputString[$i];
            $floor += ($char === '(' ? 1 : -1);

            if ($floor < 0) {
                return $i + 1;
            }
        }
    }
}