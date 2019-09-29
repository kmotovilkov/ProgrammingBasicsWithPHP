<?php

$budget = intval(readline());
$season = strtolower(readline());
$fishersCount = intval(readline());

$rentSpring = 3000;
$rentSummer = 4200;
$rentAutumn = 4200;
$rentWinter = 2600;

$discount = 0;
$extraDiscount = 0;

if ($season == "spring") {

    if ($fishersCount <= 0) {
        $rentSpring = 0;
    } else if ($fishersCount <= 6) {
        $discount = 0.1 * $rentSpring;
    } else if ($fishersCount >= 7 && $fishersCount < 12) {
        $discount = 0.15 * $rentSpring;
    } else if ($fishersCount >= 12) {
        $discount = 0.25 * $rentSpring;
    }

    $rentSpring -= $discount;

    if ($fishersCount % 2 == 0) {
        $extraDiscount = 0.05 * $rentSpring;
    }

    $rentSpring -= $extraDiscount;
    $totalRent = $rentSpring;
} else if ($season == "summer") {

    if ($fishersCount <= 0) {
        $rentSummer = 0;
    } else if ($fishersCount <= 6) {
        $discount = 0.1 * $rentSummer;
    } else if ($fishersCount >= 7 && $fishersCount < 12) {
        $discount = 0.15 * $rentSummer;
    } else if ($fishersCount >= 12) {
        $discount = 0.25 * $rentSummer;
    }
    $rentSummer -= $discount;

    if ($fishersCount % 2 == 0) {
        $extraDiscount = 0.05 * $rentSummer;
    }
    $rentSummer -= $extraDiscount;
    $totalRent = $rentSummer;
} else if ($season == "autumn") {

    if ($fishersCount <= 0) {
        $rentAutumn = 0;
    } else if ($fishersCount <= 6) {
        $discount = 0.1 * $rentAutumn;
    } else if ($fishersCount >= 7 && $fishersCount < 12) {
        $discount = 0.15 * $rentAutumn;
    } else if ($fishersCount >= 12) {
        $discount = 0.25 * $rentAutumn;
    }
    $rentAutumn = $rentAutumn - $discount;
    $totalRent = $rentAutumn;
} else if ($season == "winter") {

    if ($fishersCount <= 0) {
        $rentWinter = 0;
    } else if ($fishersCount <= 6) {
        $discount = 0.1 * $rentWinter;
    } else if ($fishersCount >= 7 && $fishersCount < 12) {
        $discount = 0.15 * $rentWinter;
    } else if ($fishersCount >= 12) {
        $discount = 0.25 * $rentWinter;
    }
    $rentWinter -= $discount;

    if ($fishersCount % 2 == 0) {
        $extraDiscount = 0.05 * $rentWinter;
    }
    $rentWinter -= $extraDiscount;
    $totalRent = $rentWinter;
}
if ($totalRent <= 0) {
    echo "ERROR";
} else if ($totalRent <= $budget) {
    $leftMoney = $budget - $totalRent;

    printf("Yes! You have %.2f leva left.", $leftMoney);
} else if ($totalRent > $budget) {
    $neededMoney = $totalRent - $budget;

    printf("Not enough money! You need %.2f leva.", $neededMoney);
}
