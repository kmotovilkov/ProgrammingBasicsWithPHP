<?php

$typeFlowers = readline();
$flowersCount = intval(readline());
$budget = intval(readline());

$priceRoses = 5;
$priceDahlias = 3.80;
$priceTulips = 2.80;
$priceNarcissus = 3;
$priceGladiolus = 2.50;

if ($typeFlowers == "Roses") {

    $totalPrice = $flowersCount * $priceRoses;

    if ($flowersCount > 80) {
        $discount = 0.1 * $totalPrice;
        $totalPrice -= $discount;
    }
} else if ($typeFlowers == "Dahlias") {

    $totalPrice = $flowersCount * $priceDahlias;

    if ($flowersCount > 90) {
        $discount = 0.15 * $totalPrice;
        $totalPrice -= $discount;
    }
} else if ($typeFlowers == "Tulips") {

    $totalPrice = $flowersCount * $priceTulips;

    if ($flowersCount > 80) {
        $discount = 0.15 * $totalPrice;
        $totalPrice -= $discount;
    }
} else if ($typeFlowers == "Narcissus") {

    $totalPrice = $flowersCount * $priceNarcissus;

    if ($flowersCount < 120) {
        $increase = 0.15 * $totalPrice;
        $totalPrice += $increase;
    }
} else if ($typeFlowers == "Gladiolus") {

    $totalPrice = $flowersCount * $priceGladiolus;

    if ($flowersCount < 80) {
        $increase = 0.2 * $totalPrice;
        $totalPrice += $increase;
    }
} else {
    $totalPrice = 0;
    $flowersCount = 0;
    $typeFlowers = "ERROR";
    $budget = 0;
}

if ($totalPrice <= $budget) {
    $leftMoney = $budget - $totalPrice;

    printf("Hey, you have a great garden with %d %s and %.2f leva left.", $flowersCount, $typeFlowers, $leftMoney);
} else {
    $neededMoney = $totalPrice - $budget;

    printf("Not enough money, you need %.2f leva more.", $neededMoney);
}
