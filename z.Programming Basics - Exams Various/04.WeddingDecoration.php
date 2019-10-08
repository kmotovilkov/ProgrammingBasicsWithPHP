<?php

$biudjet = floatval(readline());
$comand = readline();
$sum = 0;
$vsSum = 0;
$vsBroiRibbon = 0;
$vsBroiCandles = 0;
$vsBroiFlowers = 0;
$vsBroiBalloons = 0;

while (!($comand == "stop")) {
    $vidStoka = $comand;
    $comand = floatval(readline());
    //$biudjet = intval(readline());

    $broi = intval($comand);
    if ($vidStoka == "balloons") {
        $vsBroiBalloons += $broi;
        $sum += $broi * 0.1;
    } else if ($vidStoka == "flowers") {
        $vsBroiFlowers += $broi;
        $sum += $broi * 1.5;
    } else if ($vidStoka == "candles") {
        $vsBroiCandles += $broi;
        $sum += $broi * 0.5;
    } else if ($vidStoka == "ribbon") {
        $vsBroiRibbon += $broi;
        $sum += $broi * 2;
    }
    $moneyLeft = $biudjet - $sum;

    if ($moneyLeft <= 0) {
        echo "All money is spent!" . PHP_EOL;
        echo "Purchased decoration is $vsBroiBalloons balloons, $vsBroiRibbon 
        m ribbon, $vsBroiFlowers flowers and $vsBroiCandles candles.";
        return;
    } else {
        $comand = readline();
    }
}
$moneyLeft = $biudjet - $sum;


printf("Spend money: %.2f" . PHP_EOL, $sum);
printf("Money left: %.2f" . PHP_EOL, $moneyLeft);
echo "Purchased decoration is $vsBroiBalloons balloons, $vsBroiRibbon 
m ribbon, $vsBroiFlowers flowers and $vsBroiCandles candles.";




