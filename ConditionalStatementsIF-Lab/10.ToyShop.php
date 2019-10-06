<?php

$puzPrice = 2.6;
$talkDollPrice = 3;
$bearPrice = 4.1;
$minionPrice = 8.20;
$truckPrice = 2;

$tripPrice = floatval(readline());
$puzCount = intval(readline());
$talkDollCount = intval(readline());
$bearCount = intval(readline());
$minionCount = intval(readline());
$truckCount = intval(readline());

$moneyforPuz = $puzCount * $puzPrice;
$moneyforTalkDoll = $talkDollPrice * $talkDollCount;
$moneyforBear = $bearCount * $bearPrice;
$moneyforMinion = $minionCount * $minionPrice;
$moneyforTruck = $truckPrice * $truckCount;

$totalPrice = $moneyforBear + $moneyforMinion + $moneyforPuz
    + $moneyforTalkDoll + $moneyforTruck;
$toysCount = $puzCount + $talkDollCount + $bearCount
    + $minionCount + $truckCount;
if ($toysCount >= 50) {
    $totalPrice = $totalPrice * 0.75;
}
$rent = $totalPrice * 0.1;
$profit = $totalPrice - $rent;

if ($profit >= $tripPrice) {
    $moneyLeft = $profit - $tripPrice;
    $moneyLeft = number_format($moneyLeft, 2, ".", "");
    echo "Yes! $moneyLeft lv left.";

} else {
    $priseDiff = $tripPrice - $profit;
    $priseDiff = number_format($priseDiff, 2, ".", "");
    echo "Not enough money! $priseDiff lv needed.";

}
