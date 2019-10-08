<?php
require __DIR__ . '/../00/init.php';

$inputFile = __DIR__ . '/input';
$fileReader = new Helpers\FileReader_Line($inputFile);

$finalAnswer = Day01\FloorMap::getFinalLevel($fileReader->read());

echo "\r\nFINAL ANSWER: {$finalAnswer}\r\n";