<?php
$ocenka = readline();
$cenaPrestoi = 0;
$sum = 0;
$vidPomeshtenie="";

if ($vidPomeshtenie === "room for one person") {
    if ($dniPrestoi < 10) {
        $cenaPrestoi = ($dniPrestoi - 1) * 18;
    }
    if ($dniPrestoi >= 10 && $dniPrestoi <= 15) {
        $cenaPrestoi = ($dniPrestoi - 1) * 18;
    }
    if ($dniPrestoi > 15) {
        $cenaPrestoi = ($dniPrestoi - 1) * 18;
    }
}
if ($vidPomeshtenie === "apartment") {
    if ($dniPrestoi < 10) {
        $cenaPrestoi = (($dniPrestoi - 1) * 25) * 0.70;
    }
    if ($dniPrestoi >= 10 && $dniPrestoi <= 15) {
        $cenaPrestoi = (($dniPrestoi - 1) * 25) * 0.65;
    }
    if ($dniPrestoi > 15) {
        $cenaPrestoi = (($dniPrestoi - 1) * 25) * 0.50;
    }
}
if ($vidPomeshtenie === "president apartment") {
    if ($dniPrestoi < 10) {
        $cenaPrestoi = (($dniPrestoi - 1) * 35) * 0.90;
    }
    if ($dniPrestoi >= 10 && $dniPrestoi <= 15) {
        $cenaPrestoi = (($dniPrestoi - 1) * 35) * 0.85;
    }
    if ($dniPrestoi > 15) {
        $cenaPrestoi = (($dniPrestoi - 1) * 35) * 0.80;
    }
}
if ($ocenka === "positive") {
    $sum = $cenaPrestoi + ($cenaPrestoi * 0.25);
} else {
    $sum = $cenaPrestoi - ($cenaPrestoi * 0.10);
}

printf("%.2f", $sum);
