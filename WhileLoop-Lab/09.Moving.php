<?php

$width = intval(readline());
$heigth = intval(readline());
$length = intval(readline());
$hasVolume = 0;
$volume = $width * $heigth * $length;
$command = readline();
while ($command != "Done") {
    $box = intval($command);
    $volume -= $box;
    if ($volume < 0) {

        $hasVolume = 1;
        break;
    }

    $command = readline();
}
$diff = abs($volume);
if ($hasVolume == 0) {
    echo "$diff Cubic meters left." . PHP_EOL;
} else {
    echo "No more free space! You need $diff Cubic meters more.";
}
