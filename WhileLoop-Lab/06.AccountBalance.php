<?php

$entries = intval(readline());
$counter = 1;
$currentSum = 0;
while ($counter <= $entries) {
    $income = floatval(readline());
    if ($income < 0) {
        echo "Invalid operation!" . PHP_EOL;
        break;
    } else {
        $currentSum += $income;
        printf("Increase: %.2f", $income);
        echo PHP_EOL;
    }
    $counter++;
}

printf("Total: %.2f", $currentSum);
echo PHP_EOL;
