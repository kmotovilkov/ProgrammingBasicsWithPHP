<?php

$figure = readline();
if ($figure == "square") {
    $aSqu = floatval(readline());
    $areaSqu = $aSqu * $aSqu;
    printf("%.3f" . PHP_EOL, $areaSqu);
} else if ($figure == "rectangle") {
    $aRect = floatval(readline());
    $bRect = floatval(readline());
    $areaRect = $aRect * $bRect;
    printf("%.3f" . PHP_EOL, $areaRect);
} else if ($figure == "circle") {
    $rC = floatval(readline());
    $areaC = pi() * ($rC * $rC);
    printf("%.3f" . PHP_EOL, $areaC);
} else if ($figure = "triangle") {
    $aTr = floatval(readline());
    $bTr = floatval(readline());
    $areaTr = ($aTr * $bTr) / 2;

    printf("%.3f" . PHP_EOL, $areaTr);
}
