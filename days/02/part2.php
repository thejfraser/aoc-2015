<?php

use Day02\WrappingCalculator;

require __DIR__ . '/../00/init.php';

$inputFile = __DIR__ . '/input';
$fileReader = new Helpers\FileReader_ArraySplit($inputFile, 'x');

$finalAnswer = 0;
while(($line = $fileReader->read())) {
    $finalAnswer += WrappingCalculator::calculateRibbonLength(intval($line[0]), intval($line[1]), intval($line[2]));
}
echo "\r\nFINAL ANSWER: {$finalAnswer}\r\n";