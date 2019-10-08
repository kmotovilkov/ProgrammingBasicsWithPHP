<?php

$budjet = intval(readline());
$broiPredmeti = intval(readline());
$sumPredmeti = 0;

$cena = 0;
for ($i = 1; $i <= $broiPredmeti; $i++) {
    $vidPredmet = readline();
    if ($vidPredmet == "hoodie") {
        $cena = 30;
        $sumPredmeti += $cena;
    }
    if ($vidPredmet == "keychain") {
        $cena = 4;
        $sumPredmeti += $cena;
    }
    if ($vidPredmet == "T-shirt") {
        $cena = 20;
        $sumPredmeti += $cena;
    }
    if ($vidPredmet == "flag") {
        $cena = 15;
        $sumPredmeti += $cena;
    }
    if ($vidPredmet == "sticker") {
        $cena = 1;
        $sumPredmeti += $cena;
    }
}
$diffBudjet = abs($budjet - $sumPredmeti);
if ($budjet >= $sumPredmeti) {
    echo "You bought $broiPredmeti items and left with $diffBudjet lv.";
} else {
    echo "Not enough money, you need $diffBudjet more lv.";
}
