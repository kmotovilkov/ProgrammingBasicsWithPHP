<?php

$volumOfGlass = intval(readline());
$counter = 0;
$overallVolume = 0;
$volume = 0;

while (($buttons = readline()) != NULL && $overallVolume < $volumOfGlass) {

    switch ($buttons) {

        case "Easy":
            $volume = 50;
            break;
        case "Medium":
            $volume = 100;
            break;
        case "Hard":
            $volume = 200;
            break;

    }
    $overallVolume += $volume;
    $counter++;
}
if ($overallVolume > $volumOfGlass) {
    $splitWater = $overallVolume - $volumOfGlass;
    echo $splitWater . "ml has been spilled.";
} else {
    echo "The dispenser has been tapped $counter times.";
}
      
