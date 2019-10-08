<?php

$plod = readline();
$razmerSet = readline();
$broiSetove = intval(readline());


if ($razmerSet == "small") {
    if ($plod == "Watermelon") {
        $sum = (2 * 56) * $broiSetove;
    }
    if ($plod == "Mango") {
        $sum = (2 * 36.66) * $broiSetove;
    }
    if ($plod == "Pineapple") {
        $sum = (2 * 42.10) * $broiSetove;
    }
    if ($plod == "Raspberry") {
        $sum = (2 * 20) * $broiSetove;
    }

} else if ($razmerSet == "big") {
    if ($plod == "Watermelon") {
        $sum = (5 * 28.70) * $broiSetove;
    }
    if ($plod == "Mango") {
        $sum = (5 * 19.60) * $broiSetove;
    }
    if ($plod == "Pineapple") {
        $sum = (5 * 24.80) * $broiSetove;
    }
    if ($plod == "Raspberry") {
        $sum = (5 * 15.20) * $broiSetove;
    }

}
if ($sum >= 400 && $sum <= 1000) {
    $procentSum = $sum - ($sum * 0.15);
    printf("%.2f lv. ", $procentSum);
} else if ($sum > 1000) {
    $procentSum = $sum - ($sum * 0.50);
    printf("%.2f lv. ", $procentSum);
} else {
    printf("%.2f lv. ", $sum);
}
