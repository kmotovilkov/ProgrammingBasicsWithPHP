<?php

$mesec = readline();
$broiChasove = intval(readline());
$broiHoraVGrupa = intval(readline());
$vremeOtDen = readline();
$price = 0;


if ($mesec == "march" || $mesec == "april" || $mesec == "may") {
    if ($vremeOtDen == "day") {
        $price = 10.50;
    } else if ($vremeOtDen == "night") {
        $price = 8.4;
    }
} else if (($mesec == "june" || $mesec == "july" || $mesec == "august")) {
    if ($vremeOtDen == "day") {
        $price = 12.60;
    } else if ($vremeOtDen == "night") {
        $price = 10.20;
    }
}


if ($broiHoraVGrupa >= 4) {
    $price *= 0.9;
}
if ($broiChasove >= 5) {
    $price *= 0.5;
}
$cqloPoseshtenie = ($price * $broiChasove) * $broiHoraVGrupa;
printf("Price per person for one hour: %.2f" . PHP_EOL, $price);
printf("Total cost of the visit: %.2f", $cqloPoseshtenie);
