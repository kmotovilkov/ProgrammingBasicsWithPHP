<?php

$whisPrice = floatval(readline());
$amountB = floatval(readline());
$amountWine = floatval(readline());
$amountR = floatval(readline());
$amountWhisk = floatval(readline());

$rPrice = $whisPrice / 2;
$winePrice = $rPrice - (0.4 * $rPrice);
$bPrice = $rPrice - (0.8 * $rPrice);

$sumR = $amountR * $rPrice;
$sumWine = $amountWine * $winePrice;
$sumB = $amountB * $bPrice;
$sumW = $amountWhisk * $whisPrice;

$total = $sumR + $sumWine + $sumB + $sumW;

printf("%.2f", $total);
        
