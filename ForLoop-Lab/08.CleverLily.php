<?php

$age = intval(readline());
$washPrice = floatval(readline());
$toysPrice = intval(readline());

$sum = 0;
$giftMoney = 0;
$toysCount = 0;

for ($i = 1; $i <= $age; $i++) {
    if ($i % 2 == 0) {
        $giftMoney += 10;
        $sum += $giftMoney;
        $sum--;

    } else {
        $toysCount++;
    }
}
$totalMoney = $sum + ($toysCount * $toysPrice);

if ($totalMoney >= $washPrice) {
    $moneyLeft = $totalMoney - $washPrice;
    printf("Yes! %.2f", $moneyLeft);


} else {
    $diff = $washPrice - $totalMoney;
    printf("No! %.2f ", $diff);
}
?>
